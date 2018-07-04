FROM php:7.1-apache

RUN apt-get update && apt-get -y install git unzip zlib1g-dev libpq-dev
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-install pdo pdo_pgsql zip
RUN a2enmod rewrite

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug