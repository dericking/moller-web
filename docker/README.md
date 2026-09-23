# Local preview (Docker)

**Testing only.** Apache + **PHP 5.4** serves [mollerWeb/](../mollerWeb/) as DocumentRoot, so http://localhost:9001/ is the site. Production hallaweb is still on this PHP generation; keep caretaker includes 5.4-safe. Edit **`mollerWeb/`** only.

A local **MariaDB** service (`moller-db`, compose project `mollerweb3`, host port **3308**) stands in for `halladb` / `hamolpol`. Schema and a small seed are in `db/init/` (see [db/README.md](db/README.md)). Experiment apps use that DB inside Docker via each folder’s `db_credentials.php` (`MOLPOL_USE_TESTING_DB=1` is set by compose).

hallaweb-style production is Apache too; this stack matches that better than PHP’s built-in server. Docker `.htaccess` files are for this preview (DirectoryIndex, old-URL rewrites). Do not copy them to aonl1.

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

ADC dashboards (need the DB): http://localhost:9001/data/SBS/ , `/data/CREX/` , `/data/PREX-II/`

Logs: `docker compose logs -f`
Stop: `docker compose down`

Port **9001** avoids the host Apache on 8080/8081 and the MolPol-FADC-Web stack on 8090. To remap, add a gitignored `docker-compose.override.yml`.

## System compatibility

This stack is a **Linux x86_64** preview (Docker Engine + Compose v2). That is the intended box. It is not a promise for every laptop.

- **Linux Intel/AMD:** the usual case. Ports 9001 and 3308 must be free. Copy each experiment `db_credentials.php` from the `.example` (those files are gitignored).
- **Intel Mac + Docker Desktop:** usually fine if Docker Hub will pull the images.
- **Apple Silicon:** uncertain. The web image is `merorafael/php-legacy:5.4-apache` (old Debian Jessie, almost certainly **amd64 only**). Compose does not pin `platform: linux/amd64`. Docker must emulate; the image pull or the `mysqli` build can fail or run slowly.
- **MariaDB 10.11** is official multi-arch. The risky piece is the PHP 5.4 image, not the site tree.
- That Hub image is third-party and can disappear or hit rate limits; then no host can build the web container until there is a replacement 5.4 image.
- `depends_on` does not wait until MariaDB is accepting connections. The first ADC page after `up` can fail; a refresh usually works.
- Old `docker-compose` v1 may reject the top-level `name: mollerweb3` key.
- Windows is not a supported preview host (paths, CRLF, volume performance).

## Layout

```
workspace/
├── mollerWeb/       ← bind-mounted to /var/www/html
└── docker/          ← this stack (web + MariaDB)
```

Documentation pages do not need a database. SBS / CREX / PREX-II do; they talk to `moller-db` automatically in this compose. Seed data is a slice (see `db/README.md`), not the full live `hamolpol` database.
