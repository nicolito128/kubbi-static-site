FROM php:8.5-apache

WORKDIR /var/www/html/

COPY src/ /var/www/html/

EXPOSE 80

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN a2enmod rewrite

CMD ["apache2-foreground"]