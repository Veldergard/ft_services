FROM alpine:latest

RUN apk update; apk --no-cache upgrade; apk add --no-cache wget

RUN wget -q -O /etc/apk/keys/sgerrand.rsa.pub https://alpine-pkgs.sgerrand.com/sgerrand.rsa.pub; \
wget https://github.com/sgerrand/alpine-pkg-glibc/releases/download/2.32-r0/glibc-2.32-r0.apk; \
apk add glibc-2.32-r0.apk

RUN wget https://dl.influxdata.com/influxdb/releases/influxdb-2.0.2_linux_amd64.tar.gz; \
tar xvfz influxdb-2.0.2_linux_amd64.tar.gz; \
rm -rf influxdb-2.0.2_linux_amd64.tar.gz; \
mv /influxdb-2.0.2_linux_amd64 /influxdb

RUN ./influxdb/influxd > var/log/inf_start.log &; sleep 20; \
/influxdb/influx setup -u "root" -p "root1234" -o "school21" -b "school21" -r 0 -f

RUN wget https://dl.influxdata.com/telegraf/releases/telegraf-1.16.2_linux_amd64.tar.gz; \
tar xf telegraf-1.16.2_linux_amd64.tar.gz; \
cp -r /telegraf-1.16.2/* /; \
rm -rf telegraf-1.16.2_linux_amd64.tar.gz /telegraf-1.16.2; \
telegraf --input-filter docker --output-filter influxdb config > /etc/telegraf/telegraf.conf

EXPOSE 8086

VOLUME	/var/lib/influxdb

ENTRYPOINT /usr/bin/telegraf --config /etc/telegraf/telegraf.conf
