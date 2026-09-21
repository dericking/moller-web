# Local preview (Docker)

**Testing only.** Apache + **PHP 5.4** serves [mollerWeb/](../mollerWeb/) at the container document root, so `http://localhost:9001/` is the new site. Production hallaweb is still on this PHP generation; keep the caretaker includes 5.4-safe.

A local **MariaDB** service (`moller-db`, host port **3308**) stands in for `halladb` / `hamolpol`. Schema is not shipped yet — drop `SHOW CREATE TABLE` SQL into `db/init/` (see [db/README.md](db/README.md)). Experiment apps auto-use the testing DB inside Docker via each experiment folder’s `db_credentials.php` (`MOLPOL_USE_TESTING_DB`).

hallaweb-style production is Apache too; this stack matches that better than PHP’s built-in server.

## Why not `php -S`? (the lightweight alternative)

`cd mollerWeb && php -S localhost:9001` is enough to click through **simple** PHP includes with no Docker — but only if your host PHP is ≥5.4 and you are not relying on Apache `DirectoryIndex` / `.htaccess`.

It is a different server than production:

- No Apache `DirectoryIndex` / `.htaccess` (so `index.html` → `index.php` redirects may not behave the same).
- No `mod_rewrite`.
- It is single-threaded and not how hallaweb will run the site.
- Host PHP is often much newer than 5.4, so it will **not** catch 5.4 syntax breakage.

Use **Docker** as the default local preview. Use `php -S` only if Docker is unavailable.

## Quick start

From this directory:

```bash
cd docker
docker compose up -d --build
```

Open http://localhost:9001/

Logs: `docker compose logs -f`
Stop: `docker compose down`

Port **9001** avoids the host Apache on 8080/8081 and the MolPol-FADC-Web stack on 8090. To remap, add a gitignored `docker-compose.override.yml` (same `!override` pattern as that project).

If an older `mollerweb2` stack is still running:

```bash
docker compose -p mollerweb2 down
docker compose up -d --build
```

## Layout

```
workspace/
├── mollerWeb/       ← bind-mounted to /var/www/html
└── docker/          ← this stack
```

Experiment data PHP (SBS/CREX/PREX-II) needs MariaDB. That is **not** in this compose yet; those pages will error until we add a DB service later. Documentation pages do not need a database.
