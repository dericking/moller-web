-- Local hamolpol bootstrap (runs once on empty MariaDB volume).
-- Schema / seed SQL: add numbered files alongside this one (see README.md).
-- MYSQL_DATABASE / MYSQL_USER from compose already create hamolpol + webread;
-- this file only tightens grants for the read-only web user.

GRANT SELECT ON hamolpol.* TO 'hamolpol_webread'@'%';
FLUSH PRIVILEGES;
