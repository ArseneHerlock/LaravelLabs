FROM php:8.4-cli

RUN apt-get update && apt-get install -y --no-install-recommends git unzip libsqlite3-dev \
    && docker-php-ext-install pdo_sqlite \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

RUN composer install --no-dev --optimize-autoloader

CMD sh -c "cp -n .env.example .env || true; [ -n \"$APP_KEY\" ] || php artisan key:generate --force; touch database/database.sqlite; php artisan migrate --force && php artisan db:seed --force && php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"
