FROM alpine

RUN apk update; apk --no-cache upgrade; apk add --no-cache nginx wget openssl bash supervisor \
    php7 php7-fpm php7-iconv php7-json php7-mbstring php7-mysqli php7-phar php7-session

RUN wget -nv https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-english.tar.gz; \
    mkdir -p /var/www/phpmyadmin/tmp; \
    chmod 777 /var/www/phpmyadmin/tmp; \
    tar zxf phpMyAdmin-latest-english.tar.gz --strip-components 1 -C /var/www/phpmyadmin; \
    rm -rf phpMyAdmin-latest-english.tar.gz /etc/nginx/conf.d/default.conf; \
    mkdir -p /run/nginx /var/run/php

RUN openssl req -newkey rsa:2048 -x509 -sha256 -days 30 -nodes \
    -keyout /etc/ssl/private/olaurine.key -out /etc/ssl/private/olaurine.crt \
    -subj "/C=RU/ST=Kazan/L=Kazan/O=21 School/OU=olaurine/CN=olaurine"

COPY supervisord.conf /etc/supervisord.conf
COPY config.inc.php /var/www/phpmyadmin/config.inc.php
COPY nginx.conf /etc/nginx/conf.d/nginx.conf
EXPOSE 5000
ENTRYPOINT ["supervisord", "--nodaemon", "--configuration", "/etc/supervisord.conf"]
