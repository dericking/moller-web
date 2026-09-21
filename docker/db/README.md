# Local `hamolpol` database (Docker)

MariaDB service: **`moller-db`** (compose). Host port **3308** → container 3306.

| | |
|---|---|
| Database | `hamolpol` |
| User | `hamolpol_webread` / `localdev` |
| Root | `root` / `localroot` (container only) |

Experiment `db_config.php` files switch to these credentials when running inside the web container (`MOLPOL_USE_TESTING_DB` / `/.dockerenv`). Production still uses `halladb`.

## Dropping in a schema (no `mysqldump` needed)

Init scripts in `init/` run **only on first** `docker compose up` with an empty `mollerweb3_dbdata` volume. After that, load SQL yourself (see “Reload” below).

From any client that can `SELECT` on the lab DB, capture structure with:

```sql
SHOW CREATE TABLE moller_run\G
SHOW CREATE TABLE moller_run_details\G
SHOW CREATE TABLE moller_settings\G
SHOW CREATE TABLE pcrex_groups\G
-- plus any other tables the apps touch
```

Paste each `Create Table` into a new file, e.g. `init/01-schema.sql` (plain `CREATE TABLE …;` statements; drop the `\G` formatting). Optional seed data: `init/02-seed.sql`.

Tables the current apps query (for when you are hunting the right objects):

- `moller_run`
- `moller_run_details`
- `moller_settings`
- `pcrex_groups` (SBS / experiment apps)

## Reload after adding SQL

```bash
cd docker
docker compose down
docker volume rm mollerweb3_mollerweb3_dbdata   # wipes local DB only
docker compose up -d --build
```

## Reload seed only (keep schema)

After replacing `db/init/02-seed.sql` from the lab export helper
(`mollerWeb/data/export_seed_slice.php?format=sql`):

```bash
cd docker
docker exec -i mollerweb3_db mariadb -u root -plocalroot hamolpol < db/init/02-seed.sql
```

Current expanded slice targets:

- Runs: 18264–18280, 18292–18302, 17901–17917, 16924–16928 (+ any runs tagged to the groups below)
- Groups: 1088, 1090, 1068, 1017

## Sanity check

```bash
docker exec mollerweb3_web php -r 'echo extension_loaded("mysqli") ? "mysqli ok\n" : "no mysqli\n";'
docker exec mollerweb3_db mariadb -u hamolpol_webread -plocaldev -e "SHOW TABLES FROM hamolpol;"
```
