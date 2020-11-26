FROM alpine:latest

RUN apk update; apk --no-cache upgrade; apk add --no-cache wget

RUN wget https://dl.grafana.com/oss/release/grafana-7.3.4.linux-amd64.tar.gz; \
tar -zxvf grafana-7.3.4.linux-amd64.tar.gz; \
rm -rf grafana-7.3.4.linux-amd64.tar.gz \
mv /grafana-7.3.4 /grafana

EXPOSE	3000

WORKDIR	/grafana/bin/

ENTRYPOINT	./grafana-server web
