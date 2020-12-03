FROM alpine:latest

RUN apk update; apk --no-cache upgrade; \
apk add --no-cache mysql mysql-client

COPY /start.sh /wordpress.sql /init_db.sh ./

RUN chmod +x start.sh init_db.sh

VOLUME	/var/lib/mysql

EXPOSE 3306

ENTRYPOINT ./start.sh
