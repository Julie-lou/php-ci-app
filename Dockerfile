
# Stage 1: Build + Test (PHP, Composer, Dependencies, PHPUnitn, soruce code)
FROM composer:2 AS builder

WORKDIR /app

COPY composer.json composer.lock ./

RUN composer install --no-interaction --prefer-dist

COPY . .

RUN composer test



# Stage 2: Runtime (only PHP to run the application)

FROM php:8.3-cli

WORKDIR /app

COPY --from=builder /app .

CMD ["php", "index.php"]