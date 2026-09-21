# Experiment data app — copy this folder

This directory is the live-app template (PREX-II / CREX / SBS). It is **not** a public results page. Do not add it to `data/index.php`.

`data/W3CSS_TEMPLATE/` was the old W3.CSS reference tree; it was dropped (do not copy from it).

## Create a new experiment

1. Copy this folder:
   ```
   cp -a mollerWeb/data/EXP_TEMPLATE mollerWeb/data/NEWNAME
   ```
   Keep the frozen URLs for existing apps: `data/PREX-II/`, `data/CREX/`, `data/SBS/`.
2. Put a **128×128 PNG** in the new folder (header logo).
3. Copy `db_credentials.php.example` to `db_credentials.php` and replace the `CHANGEME_*` values. That file is gitignored.
4. Edit **`exp_config.php`**. Use `$molpol_profile = "prefix"` if database experiment names share a leading string (SBS is `SBS…`).
5. Link it from `data/index.php` the same way SBS / CREX / PREX-II are linked.
6. Preview at `http://localhost:9001/data/NEWNAME/`.

## `exp_config.php`

| Variable | What it is |
|----------|------------|
| `$expname` | `moller_run_details.experiment` string (must match the database). |
| `$exptext` | Title in the page header, e.g. `PREX-II (2019)`. |
| `$explogo` | Filename of the 128×128 PNG in this directory. |
| `$molpol_profile` | `'exact'` — `experiment LIKE '{expname}'` (PREX-II, CREX, and most new copies). `'prefix'` — `experiment LIKE '{expname}%'` and include `commiss` run types (SBS). `'sbs'` / `'contains'` are aliases of `'prefix'`. |
| `$expaggregatedglob` | Basename glob under `data/analysis/aggregated/`, e.g. `aggregated_prex_*.png`. Empty string = no aggregated plots. Must match `aggregated_[letters-or-digits]_*.png`. |

Each experiment folder has its own `db_credentials.php` (gitignored). Copy from `db_credentials.php.example`. Docker uses `MOLPOL_USE_TESTING_DB` / `/.dockerenv`; production uses the else-branch.

## What stays in the copied PHP (do not fork unless you must)

`index.php`, `showrun.php`, `showgroup.php`, `showbyday.php`, `showtype.php`, `showsettings.php`, `functions.php`, `style.css`, and `data_pull.php` are the same files in PREX-II, CREX, and SBS. Session and SQL live in that folder’s `data_pull.php`.

If you change chrome or a table, change **PREX-II** (or this template) and copy the file into the other experiment folders so they do not drift. `$molpol_profile` is the SQL switch; it does not belong on every page.

## Group-ID labels in `functions.php`

The group table still prints PREX-II / CREX / SBS from historic `id_group` ranges (`< 2999`, `3000–3098`, `> 3098`). That is shared display logic, not `exp_config.php`. Leave it unless those ranges change.
