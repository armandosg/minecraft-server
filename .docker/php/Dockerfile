FROM php:7.2-apache

MAINTAINER Armando

COPY . /srv/app
COPY .docker/php/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /srv/app \
    && a2enmod rewrite
