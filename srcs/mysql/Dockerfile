FROM alpine:latest

RUN adduser -D -g 'mysql' mysql

RUN apk update; apk --no-cache upgrade; \
apk add --no-cache mysql mysql-client

COPY /start.sh /wordpress.sql /init_db.sh /config.sql ./

RUN chmod +x start.sh init_db.sh

VOLUME	/var/lib/mysql

EXPOSE 3306

ENTRYPOINT ./start.sh
