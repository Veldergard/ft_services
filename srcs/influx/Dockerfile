FROM alpine:latest

RUN apk update; apk --no-cache upgrade; \
    apk add --no-cache wget

RUN wget -q -O /etc/apk/keys/sgerrand.rsa.pub https://alpine-pkgs.sgerrand.com/sgerrand.rsa.pub; \
    wget -nv https://github.com/sgerrand/alpine-pkg-glibc/releases/download/2.32-r0/glibc-2.32-r0.apk; \
    apk add glibc-2.32-r0.apk

RUN wget -nv https://dl.influxdata.com/influxdb/releases/influxdb-2.0.3_linux_amd64.tar.gz; \
    tar xfz influxdb-2.0.3_linux_amd64.tar.gz; \
    rm -rf influxdb-2.0.3_linux_amd64.tar.gz; \
    mv /influxdb-2.0.3_linux_amd64 /influxdb

RUN wget -nv https://dl.influxdata.com/telegraf/releases/telegraf-1.17.0_linux_amd64.tar.gz; \
    tar xf telegraf-1.17.0_linux_amd64.tar.gz; \
    cp -r /telegraf-1.17.0/* /; \
    rm -rf telegraf-1.17.0_linux_amd64.tar.gz /telegraf-1.17.0; \
    telegraf --input-filter docker --output-filter influxdb config > /etc/telegraf/telegraf.conf

COPY /start.sh /
RUN chmod 755 start.sh

EXPOSE 8086
VOLUME	/var/lib/influxdb
ENTRYPOINT ./start.sh
