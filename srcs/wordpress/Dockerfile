FROM alpine:latest

RUN apk update; apk upgrade; apk add wget \
php7 php7-fpm php7-json php7-mysqli \
mkdir /www ; \

RUN wget https://wordpress.org/latest.tar.gz ; \
tar -xzvf latest.tar.gz; \
mv wordpress/* /www ; \
rm -rf /var/cache/apk/*
