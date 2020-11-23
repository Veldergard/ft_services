FROM alpine:latest

RUN apk update; apk upgrade; apk add nginx wget \
php7 php7-fpm php7-iconv php7-json php7-mbstring php7-mysqli php7-phar php7-session

RUN wget https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-english.tar.gz; \
mkdir -p /var/www/phpmyadmin/tmp; chmod 777 /var/www/phpmyadmin/tmp; \
tar zxvf phpMyAdmin-latest-english.tar.gz --strip-components 1 -C /var/www/phpmyadmin; \
rm -rf phpMyAdmin-latest-english.tar.gz /etc/nginx/conf.d/default.conf; \
mkdir -p /run/nginx /var/run/php

COPY wp-config.php /var/www/phpmyadmin/wp-config.php
COPY nginx.conf /etc/nginx/conf.d/nginx.conf

EXPOSE 5000
CMD	/usr/sbin/php-fpm7; nginx -g 'daemon off;'
