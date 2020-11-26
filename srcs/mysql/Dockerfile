FROM alpine:latest

RUN apk update; apk --no-cache upgrade; apk add --no-cache mysql mysql-client openrc

COPY /my.cnf ./etc/mysql/
COPY /start.sh /wordpress.sql ./

VOLUME	/var/lib/mysql

EXPOSE 3306

ENTRYPOINT ./start.sh
