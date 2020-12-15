FROM alpine:latest

RUN apk update; apk --no-cache upgrade; \
apk add --no-cache wget php7 php7-fpm php7-json php7-mysqli nginx

RUN wget https://wordpress.org/latest.tar.gz; \
tar -xzvf latest.tar.gz; \
rm -rf latest.tar.gz; \
mv wordpress /var/www/wordpress; \
rm -rf /var/cache/apk/* /etc/nginx/conf.d/default.conf wordpress; \
chmod 777 /var/www/*; \
chmod 777 /var/www/wordpress/*; \
mkdir -p /run/nginx

COPY wp-config.php /var/www/wordpress/wp-config.php
COPY nginx.conf /etc/nginx/conf.d/

EXPOSE 5050
CMD /usr/sbin/php-fpm7; nginx -g 'daemon off;'
