FROM alpine:latest

RUN apk update; apk --no-cache upgrade; \
    apk add --no-cache wget bash

RUN wget -q -O /etc/apk/keys/sgerrand.rsa.pub https://alpine-pkgs.sgerrand.com/sgerrand.rsa.pub; \
    wget -nv https://github.com/sgerrand/alpine-pkg-glibc/releases/download/2.32-r0/glibc-2.32-r0.apk; \
    apk add glibc-2.32-r0.apk

COPY influxdb.tar.gz /
RUN tar xfz influxdb.tar.gz; \
    cp -r /influxdb-1.8.3-1/* /; \
    rm -rf influxdb.tar.gz /influxdb-1.8.3-1/

COPY telegraf.tar.gz /
RUN tar xf telegraf.tar.gz; \
    cp -r /telegraf-1.17.0/* /; \
    rm -rf telegraf.tar.gz /telegraf-1.17.0

COPY telegraf.conf /etc/telegraf/telegraf.conf
COPY start.sh /

EXPOSE 8086
VOLUME	/var/lib/influxdb
ENTRYPOINT ./start.sh
