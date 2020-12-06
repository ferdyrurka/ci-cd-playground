FROM php:8-apache

RUN apt-get update && apt-get install -y libpq-dev && a2enmod rewrite
RUN pecl install xdebug && docker-php-ext-enable xdebug

COPY apache2.conf /etc/apache2/sites-enabled/000-default.conf

ENV XDEBUG_MODE=coverage
