FROM php:8.5-fpm

RUN apt-get update && apt-get install -y --no-install-recommends \
    libpq-dev \
    libsqlite3-dev \
    && docker-php-ext-install pdo_mysql pdo_pgsql pdo_sqlite \
    && rm -rf /var/lib/apt/lists/*
