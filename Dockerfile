FROM webdevops/php-apache:8.0-alpine

ENV TZ=Asia/Jakarta

WORKDIR /app

COPY --chown=root:root . .

RUN chmod -R 755 .

RUN apk add --no-cache tzdata && ln -sf /usr/share/zoneinfo/$TZ /etc/localtime

RUN \
echo "ServerName localhost" >> /etc/apache2/httpd.conf && \
echo "LoadModule rewrite_module modules/mod_rewrite.so" >> /etc/apache2/httpd.conf && \
echo "session.save_path = '/tmp'" >> /opt/docker/etc/php/php.webdevops.ini && \
sed -i 's|AllowOverride None|AllowOverride All|g' /etc/apache2/httpd.conf && \
sed -i 's|/var/www/localhost/htdocs|/app|g' /etc/apache2/httpd.conf && \
sed -i 's|DirectoryIndex index.html|DirectoryIndex index.php index.html|g' /etc/apache2/httpd.conf && \
sed -i 's|date.timezone = UTC|date.timezone = Asia/Jakarta|g' /opt/docker/etc/php/php.webdevops.ini

EXPOSE 80