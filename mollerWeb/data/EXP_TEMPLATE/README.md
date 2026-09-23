# Experiment data app — copy this folder

This directory is the live-app template (PREX-II / CREX / SBS). It is **not** a public page for the ADC analysis dashboard. Do not add it to `data/index.php`.

## Create a new experiment

1. Copy this folder:
   ```
   cp -a /data/EXP_TEMPLATE /data/NEWNAME
   ```
   Keep the frozen URLs for existing apps: `data/PREX-II/`, `data/CREX/`, `data/SBS/`.
2. Put a **128×128 PNG** in the new folder (header logo).
3. Copy `db_credentials.php.example` to `db_credentials.php` and replace the `CHANGEME_*` values. That file is gitignored so it can't be accidentally committed into the repository.
4. Edit **`exp_config.php`**. Use `$molpol_profile = "prefix"` if database experiment names share a leading string (SBS is `SBS` and PREX was `PREX-II`).
5. Link it from `data/index.php` the same way SBS / CREX / PREX-II are linked.
6. Remove the `.htaccess` file that only prevents `.php` files from being served, and remove `index.html`. DO NOT remove `index.php` as this serves the entrace to the analysis dashboard. 
7. Preview at `http://localhost:9001/data/NEWNAME/` when using test container or actual live URL.

## `exp_config.php`

| Variable | What it is |
|----------|------------|
| `$expname` | `moller_run_details.experiment` string (must match the database). |
| `$exptext` | Title in the page header, e.g. `PREX-II (2019)`. |
| `$explogo` | Filename of the 128×128 PNG in this directory. |
| `$molpol_profile` | `'exact'` — `experiment LIKE '{expname}'` (PREX-II, CREX, and most new copies). `'prefix'` — `experiment LIKE '{expname}%'` and include `commiss` run types (SBS). `'sbs'` / `'contains'` are aliases of `'prefix'`. |
| `$expaggregatedglob` | Basename glob under `data/analysis/aggregated/`, e.g. `aggregated_prex_*.png`. Empty string = no aggregated plots. Must match `aggregated_[letters-or-digits]_*.png`. |

Each experiment folder has its own `db_credentials.php` (gitignored). Copy from `db_credentials.php.example`. Docker uses `MOLPOL_USE_TESTING_DB` / `/.dockerenv`; production uses the else-branch so be sure to edit it properly.

## What stays in the copied PHP (do not fork unless you must)

`index.php`, `showrun.php`, `showgroup.php`, `showbyday.php`, `showtype.php`, `showsettings.php`, `functions.php`, `style.css`, and `data_pull.php` are the same files in PREX-II, CREX, and SBS. Session and SQL live in that folder’s `data_pull.php`.

## Group-ID labels in `functions.php`

The group table still prints PREX-II / CREX / SBS from historic `id_group` ranges (`< 2999`, `3000–3098`, `> 3098`). That is shared display logic, not `exp_config.php`. Leave it unless those ranges change.