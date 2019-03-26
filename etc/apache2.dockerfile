FROM php:7.3-apache

RUN apt-get update && apt-get install -y libpq-dev

COPY apache2.conf /etc/apache2/sites-enabled/000-default.conf