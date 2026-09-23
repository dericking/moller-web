# Møller polarimeter site (`mollerWeb/`)

Caretaker notes for the working tree. Edit **`mollerWeb/`** only. Preview locally with Docker (`docker/README.md`) at http://localhost:9001/ (Apache + **PHP 5.4**). Backlog: `TODO.md` (not site content). If `moller_old/` exists (live host), it is read-only.

Gitignored: `db_credentials.php`, `orphaned/`, and the mixed `mollerWeb/photos/` dump except `photos/index.php`. `people/photos/` and `targets/tiltingTarget/photos/` stay eligible to commit.

This site’s ADC Analysis Dashboard (the PREX-II / CREX / SBS apps) is copied from `data/EXP_TEMPLATE/`. Additional details are in `data/EXP_TEMPLATE/README.md`. The FADC Analysis Dashboard is a **separate** project/repository: https://github.com/dericking/molpol-fadc-analysis-dashboard

## Layout

**Chrome** is the shared page shell (left nav, masthead crumbs, title block, footer) and the CSS/icons that draw it — `_includes/` and `_assets/`, not a copied HTML header, and not the browser. Section hubs (ops, links, data, magnets, ...) use that chrome. The frozen experiment apps (`data/SBS/`, `data/CREX/`, `data/PREX-II/`) keep their own header and CSS — do not wrap those in `PageStart()`.

```php
require_once dirname(__DIR__) . '/_includes/bootstrap.php';
// from data/old/byYear/ a file is three levels down (PHP 5.4 — nest dirname):
// require_once dirname(dirname(dirname(__DIR__))) . '/_includes/bootstrap.php';

PageTitle("Short title");
PageSubtitle("Optional one-liner");   // omit to hide
LongDescription("Optional longer blurb before the body / tables.");
Author("Optional");                   // omit to hide
PageDate("Optional");                 // not Date() — that name is PHP's date()
PageStart("data/");                   // sidebar key: index.php, links/, targets/, ...

// body

PageEnd();
```

`PageStart($nav)` must match an `href` in `$nav` in `_includes/config.php` so the left nav can mark the current section.

Site title, `$siteBase`, home cards, and sidebar live in **`_includes/config.php`**. Edit `$homeCards`; `$nav` is built from that list (no Home item — the sidebar brand already goes home). Set `'home' => false` on a `$homeCards` row to keep it in the left nav only (no home-page tile). `PageStart()` fills masthead crumbs (`Home ≪ ...`) from the script path. Nested folder labels live in `$trailLabels`. Override with `PageTrail([...])` before `PageStart()` if needed.

Use `site_url('path/from/site/root')` for links. Do **not** hardcode `/equipment/moller`. `$siteBase` is inferred from `SCRIPT_NAME` (empty in Docker; `/equipment/moller` on hallaweb). Those chrome files (`_includes/` and `_assets/` — shared nav, crumbs, title block, footer, and their CSS) are not public IA (the section folders). Chrome pages need `_includes/` and `_assets/` on the live host; the experiment apps do not.

**`links/` vs `tools/`:** `links/` is the Links & Tools **webpage** (the section hub: `$homeCards` / `$nav` href `links/`). `tools/` is only where listed tools live (calculators such as `tools/foil-heating/`, `tools/asymmetry-uncertainty/`). Do not put the hub tables in `tools/`; do not drop calculator files into `links/`. Hitting `tools/` itself 301s to `links/`.

## Tables

Three helpers, all loaded by `bootstrap.php`. Edit the helper, not a copied table, when the column layout should change.

### `link_table($heading, $rows, $headers = [])`

Section indexes (Links, Targets, Magnets, Detector, DAQ, Analysis, ...). Several files in one row: `'links' => [ ... ]`.

```php
link_table('External Links', [
    [
        'text' => 'ELOG',
        'url'  => 'https://...',
        'type' => 'EXT',
        'desc' => 'Møller ELOG',
    ],
    [
        'text' => 'Manual',
        'url'  => 'ops/docs/moller-polarimeter-manual.pdf',
        'type' => 'PDF',
        'desc' => 'Hall A equipment manual chapter',
        'date' => '2023',
    ],
    [
        'links' => [
            ['type' => 'PDF',  'url' => 'magnets/docs/QM1H02.pdf'],
            ['type' => 'XLSX', 'url' => 'magnets/docs/QM1H02.xlsx'],
        ],
        'desc' => 'QM1H02 field mapping',
        'date' => '2012',
    ],
], [
    'text' => 'Data Set',          // rename the link column
    'date' => 'Year',
    'columns' => ['text', 'date', 'desc'],
]);
```

Keys: `text`, `url`, `desc`, `type`; optional `date`, `links`. Aliases: `linkText`, `linkURL`, `linkDesc`, `linkType`, `linkDate`. `http(s)` and file-like `type`s open in a new tab.

### Link types (`type`)

Set `'type'` on **every** `link_table` row (and every item in `'links'`). The helper prints it as a tag before the anchor, e.g. `[PDF] Manual`. Do **not** auto-infer from the URL in `tables.php` — pick the tag when you add the row. Use uppercase.

| `type` | Use for |
|--------|---------|
| `EXT` | Off-site `http(s)` (ELOG, wiki, GitHub, ...) |
| `WEB` | On-site HTML/PHP page, including single-file calculators |
| `DIR` | Folder / directory index |
| `PDF`, `TXT`, `KEY`, `DAT`, `JPG`, `PNG`, `XLSX`, `ODS`, ... | A file; tag = extension |

```php
    [
        'text' => 'ELOG',
        'url'  => 'https://...',
        'type' => 'EXT',
        'desc' => '...',
    ],
    [
        'text' => 'Foil heating',
        'url'  => 'tools/foil-heating/',
        'type' => 'WEB',
    ],
    [
        'text' => 'Photo archive',
        'url'  => 'photos/',
        'type' => 'DIR',
    ],
    [
        'text' => 'OSP',
        'url'  => 'ops/docs/....pdf',
        'type' => 'PDF',
    ],
```

A calculator that is one HTML page is `WEB`, not `DIR`. Nested PHP notes are `WEB`; the folder that lists them is `DIR`. `publication_table()` / `talks_table()` do not use these tags.

Rows are sorted by `date` **newest first** by default (undated last). Same default applies to `publication_table()` and `talks_table()`. Override `link_table` with the options bag:

```php
], [
    'sort' => 'date-asc',  // oldest first
    // 'sort' => false,    // keep the array order as written
]);
```

### `publication_table($heading, $rows)`

Papers / literature. Keys: `date`, `journal`, `authors`, `title`, `url`, `arxiv`. Optional `arxiv_url`, `topic`. If any row has `topic`, a Topic column is shown (literature page).

### `talks_table($heading, $rows)`

Keys: `date`, `title`, `url`, `presenter`, `event`. Optional `more` => extra title-cell links.

Examples: `data/index.php`, `links/index.php`, `literature/index.php`, `talks/index.php`, `magnets/index.php`.

## Legacy documents

Wrapped notes (analysis docs, DAQ notes, module pages) sit in a `<div class="legacy-doc">` (no `card`). Year and experiment archives use `<div class="legacy-doc legacy-archive">` so result tables go full width with centered cells.

Section PDFs and converted notes live under each section’s `docs/` (`magnets/docs/`, `daq/docs/`, `talks/docs/`, ...). Hubs stay PHP.

- Experiment headings (names starting with **E**) are `<section class="legacy-experiment"><h2>...</h2>`.
- Individual shifts are `<section class="legacy-shift"><h3>date</h3>`.
- Target-system notes use `<p class="legacy-note">`.

Do not rewrite polarization numbers, run lists, or `href`s when restyling. Visible “Moeller”/“Moller” should be **Møller**; leave lowercase `moller` in file names and URLs.

Frozen public data apps (do not rename): `data/SBS/index.php`, `data/CREX/index.php`, `data/PREX-II/index.php`. New experiment copies start from `data/EXP_TEMPLATE/`. Additional details for the ADC Analysis Dashboard are in `data/EXP_TEMPLATE/README.md`. `$molpol_profile` is `exact` or `prefix` (SBS). The SBS index matches experiment names with `strpos` (`SBS-GMn`, ...); PREX-II and CREX stay exact.

The FADC Analysis Dashboard is a separate project/repository: https://github.com/dericking/molpol-fadc-analysis-dashboard

## Directory indexes

Folders that used to be Apache listings call `render_dir_index($heading, $nav)` from a tiny `index.php` (see `_includes/dir_index.php`). `targets/templeTarget/` is a curated `link_table` instead, because it needs labelled links to its subfolders.

## Hallaweb vs Docker

`.htaccess` files in this tree are for the **Docker preview** (DirectoryIndex, old-URL rewrites). Do not copy them to aonl1 — live instructions are to use `.htaccess` only when restricting access.

Live Apache lists `index.html` before `index.php`. A directory URL (`/data/`, `/magnets/`) 404s if there is no `index.html`. Either open `index.php` or leave a tiny `index.html` that only forwards to `index.php`. Calculators under `tools/` are already `index.html`.

## CSS

Tokens and layout: `_assets/style.css`. Table header colour is `--list-table-header-bg` / `--list-table-header-text`. Do not bring back W3.CSS.

### Font Awesome (subset)

Icons are Font Awesome Free 6.5.1, vendored under `_assets/fontawesome/` — not the CDN, and **not the full kit**. Only glyphs the site uses today are in `webfonts/*.woff2` and `css/icons.css`. License files stay next to them.

Used now (solid unless noted): `book`, `book-open`, `bullseye`, `chalkboard-user`, `chart-bar`, `chart-line`, `eye`, `file-lines`, `globe`, `link`, `location-dot`, `magnet`, `microchip`, `pencil`, `tags`, `user`, `users`, and `calendar` (regular).

If you need another icon, add it back: put the glyph into those two webfonts (or restore the official 6.5.1 Free webfonts), add a `.fa-*::before` rule in `css/icons.css`, and list it here. A class from the full kit will otherwise render as a blank.

## Adding a page

1. Put the file under the right section folder (or add a `$homeCards` row in `config.php`; `'home' => false` if it should not get a home tile).
2. `require` bootstrap, then `PageTitle` / `PageStart` / `PageEnd`.
3. Prefer `link_table()` / `publication_table()` / `talks_table()` over hand-built HTML tables. Give every `link_table` row an uppercase `'type'`.
4. Check it in the Docker preview, including the left-nav highlight and that CSS is `/_assets/...` locally (on hallaweb it must be `/equipment/moller/_assets/...`).
