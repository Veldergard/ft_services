FROM alpine:latest

RUN apk update ; apk upgrade ; apk add wget dpkg

RUN wget https://dl.influxdata.com/telegraf/releases/telegraf-1.16.1_static_linux_amd64.tar.gz ; \
tar -C . -xzf telegraf-1.16.1_static_linux_amd64.tar.gz ; \
mv telegraf-1.16.1/etc/telegraf etc/telegraf ; \
mv telegraf-1.16.1/etc/logrotate.d /etc/logrotate.d ; \
mv telegraf-1.16.1/usr/bin/telegraf usr/bin/telegraf ; \
chmod +x usr/bin/telegraf ; \
mv telegraf-1.16.1/usr/lib/telegraf usr/lib/telegraf ; \
chmod +x usr/lib/telegraf/scripts/init.sh ; \
chmod +x usr/lib/telegraf/scripts/telegraf.service; \
mv telegraf-1.16.1/var/log/telegraf var/log/telegraf
