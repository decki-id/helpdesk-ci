FROM php:8.0.30-apache

RUN a2enmod rewrite && sed -i 's|AllowOverride None|AllowOverride All|g' /etc/apache2/apache2.conf

WORKDIR /var/www/html

COPY . .

RUN chown -R www-data:www-data . && chmod -R 755 .

EXPOSE 80