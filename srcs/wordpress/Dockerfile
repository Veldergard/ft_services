FROM alpine

RUN mkdir -p /var/www/;

RUN apk update; apk --no-cache upgrade; \
    apk add --no-cache curl nginx php7 php7-fpm php7-json \
    php7-mysqli php7-phar php7-mbstring mysql-client bash supervisor

COPY nginx.conf /etc/nginx/conf.d/
COPY install.sh /usr/bin/
COPY start.sh   /usr/bin/

RUN mkdir /run/nginx; \
    rm -rf /etc/nginx/conf.d/default.conf; \
    install.sh

COPY supervisord.conf /etc/supervisord.conf
EXPOSE 5050
WORKDIR /var/www
CMD start.sh
