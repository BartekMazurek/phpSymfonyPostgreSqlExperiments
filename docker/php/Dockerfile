FROM php:7.4-fpm

RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install -y libpq-dev && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql && docker-php-ext-install pdo pdo_pgsql pgsql;
RUN pecl install apcu
RUN docker-php-ext-enable apcu

WORKDIR /var/www/app

COPY ./docker/php/php.ini $PHP_INI_DIR/
COPY ./docker/php/xdebug.ini $PHP_INI_DIR/conf.d/

RUN pecl install xdebug && docker-php-ext-enable xdebug