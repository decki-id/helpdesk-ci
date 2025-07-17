FROM php:8.0-apache-alpine

ENV TZ=Asia/Jakarta

WORKDIR /var/www/html

COPY . .

RUN chown -R www-data:www-data . && chmod -R 755 .

RUN apk add --no-cache tzdata && ln -sf /usr/share/zoneinfo/$TZ /etc/localtime

RUN \
echo "LoadModule rewrite_module modules/mod_rewrite.so" >> /etc/apache2/httpd.conf && \
sed -i 's|AllowOverride None|AllowOverride All|g' /etc/apache2/httpd.conf

EXPOSE 80