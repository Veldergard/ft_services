FROM alpine:latest

COPY my.cnf ./etc/mysql/

RUN adduser -D -g 'mysql' mysql

RUN apk update; apk --no-cache upgrade; \
    apk add --no-cache mysql mysql-client

COPY start.sh /config.sql /

RUN chmod +x start.sh

VOLUME	/var/lib/mysql

EXPOSE 3306

ENTRYPOINT ./start.sh
