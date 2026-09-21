FROM merorafael/php-legacy:5.4-apache

# Preview stack targets hallaweb-era PHP 5.4 (EOL). Documentation site is
# PHP includes + static files; experiment apps need mysqli → MariaDB.
# Base image already has gcc/make/re2c; skip apt (Jessie archives are flaky).

RUN docker-php-ext-install mysqli \
    && cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini 2>/dev/null || true

COPY php.ini /usr/local/etc/php/conf.d/moller-local.ini

RUN a2enmod rewrite \
    && printf '%s\n' \
       'DirectoryIndex index.php index.html' \
       '<Directory /var/www/html>' \
       '  Options Indexes FollowSymLinks' \
       '  AllowOverride All' \
       '  Require all granted' \
       '</Directory>' \
       > /etc/apache2/conf-available/moller-docroot.conf \
    && a2enconf moller-docroot

# Bind-mounted mollerWeb/ is DocumentRoot (see docker-compose.yml).
