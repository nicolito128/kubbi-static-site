FROM php:8.5-apache

COPY . /var/www/html/

EXPOSE 80

# Configura Apache
RUN a2enmod rewrite