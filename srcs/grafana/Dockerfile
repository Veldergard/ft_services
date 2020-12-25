FROM alpine

RUN apk update; apk --no-cache upgrade; apk add --no-cache wget bash supervisor

RUN wget -q -O /etc/apk/keys/sgerrand.rsa.pub https://alpine-pkgs.sgerrand.com/sgerrand.rsa.pub; \
    wget -nv https://github.com/sgerrand/alpine-pkg-glibc/releases/download/2.32-r0/glibc-2.32-r0.apk; \
    apk add glibc-2.32-r0.apk

RUN wget -nv https://dl.grafana.com/oss/release/grafana-7.3.4.linux-amd64.tar.gz; \
    tar -zxf grafana-7.3.4.linux-amd64.tar.gz; \
    rm -rf grafana-7.3.4.linux-amd64.tar.gz; \
    mv /grafana-7.3.4 /grafana; \
    mv /grafana/bin/grafana-server /usr/bin/grafana-server; \
    mv /grafana/bin/grafana-cli /usr/bin/grafana-cli

COPY supervisord.conf /etc/supervisord.conf
COPY grafana.db /grafana/data/grafana.db
EXPOSE	3000
WORKDIR	/grafana/
ENTRYPOINT ["supervisord", "--nodaemon", "--configuration", "/etc/supervisord.conf"]
