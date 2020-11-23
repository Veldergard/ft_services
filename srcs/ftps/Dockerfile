FROM alpine:latest

RUN apk update; apk upgrade; apk add openssl --no-cache; \
apk add pure-ftpd --repository http://dl-3.alpinelinux.org/alpine/edge/testing/ --allow-untrusted --no-cache

RUN mkdir
RUN openssl req -newkey rsa:2048 -x509 -sha256 -days 30 -nodes \
-out /etc/ssl/private/pure-ftpd.pem \
-keyout /etc/ssl/private/pure-ftpd.pem \
-subj "/C=RU/ST=Kazan/L=Kazan/O=21 School/OU=olaurine/CN=olaurine"

EXPOSE 21 21000
