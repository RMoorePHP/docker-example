FROM php:7.1-alpine

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install pcntl


WORKDIR /app

CMD php artisan horizon
