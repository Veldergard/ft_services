FROM alpine:latest

RUN mkdir -p /var/www/;

RUN apk update; apk --no-cache upgrade; \
    apk add --no-cache curl nginx php7 php7-fpm php7-json \
    php7-mysqli php7-phar php7-mbstring mysql-client

COPY nginx.conf /etc/nginx/conf.d/
COPY install.sh /usr/bin/
COPY start.sh   /usr/bin/

RUN mkdir /run/nginx; \
    rm -rf /etc/nginx/conf.d/default.conf; \
    chmod 755 /usr/bin/start.sh /usr/bin/install.sh

RUN install.sh

EXPOSE 5050
WORKDIR /var/www
CMD start.sh
