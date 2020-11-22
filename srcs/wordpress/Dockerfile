FROM alpine:latest

RUN apk update; apk upgrade; apk add wget \
php7 php7-fpm php7-json php7-mysqli nginx;

RUN wget https://wordpress.org/latest.tar.gz; \
tar -xzvf latest.tar.gz; \
rm -rf latest.tar.gz; \
mkdir /www; \
mv wordpress/* /www; \
rm -rf /var/cache/apk/* /etc/nginx/conf.d/default.conf; \
chmod 777 /var/www/*; \
mkdir -p /run/nginx

COPY wp-config.php /www/wp-config.php
COPY nginx.conf /etc/nginx/conf.d/

EXPOSE 5050
CMD nginx -g 'daemon off;'; php -S 0.0.0.0:5050 -t /www/
