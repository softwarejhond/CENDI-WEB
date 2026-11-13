FROM php:8.3-apache

RUN a2enmod rewrite \
    && sed -ri 's!/var/www/html!/var/www/html!g' /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html
COPY --chown=www-data:www-data . /var/www/html

EXPOSE 80
