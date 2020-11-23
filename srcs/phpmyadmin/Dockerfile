FROM alpine:latest

RUN apk add nginx wget \
php7 php7-fpm php7-iconv php7-json php7-mbstring php7-mysqli php7-phar php7-session

RUN wget https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-english.tar.gz; \
mkdir -p /var/www/phpmyadmin/tmp; chmod 777 /var/www/phpmyadmin/tmp; \
tar zxvf phpMyAdmin-latest-english.tar.gz --strip-components 1 -C /var/www/phpmyadmin; \
rm -rf phpMyAdmin-latest-english.tar.gz /etc/nginx/conf.d/default.conf

COPY nginx.conf config.inc.php /

RUN mv /nginx.conf /etc/nginx/conf.d/; \
mv /config.inc.php /var/www/phpmyadmin/; \
mkdir -p /run/nginx /var/run/php

EXPOSE 5000

CMD	/usr/sbin/php-fpm7; nginx -g 'daemon off;'
