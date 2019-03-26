FROM php:7.3-apache

RUN apt-get update && apt-get install -y libpq-dev && a2enmod rewrite \
    && pecl install xdebug-2.7.0 \
    && echo 'zend_extension="/usr/local/lib/php/extensions/no-debug-non-zts-20180731/xdebug.so"' >> /usr/local/etc/php/php.ini

COPY apache2.conf /etc/apache2/sites-enabled/000-default.conf