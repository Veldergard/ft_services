FROM alpine:latest

RUN apk update ; apk upgrade ; mkdir /www ; \
apk add vim wget \
php7 php7-fpm php7-json php7-mysqli php7-opcache php7-gd \
php7-zlib php7-curl php7-mbstring php7-session

RUN wget https://wordpress.org/latest.tar.gz ; \
tar -xzvf latest.tar.gz ; \
mv wordpress/* /www ; \
rm -rf /var/cache/apk/*

COPY wp-config.php /www/wp-config.php

EXPOSE 5050
CMD php -S 0.0.0.0:5050 -t /www/
