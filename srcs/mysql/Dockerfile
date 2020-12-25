FROM alpine

COPY my.cnf ./etc/mysql/

RUN adduser -D -g 'mysql' mysql

RUN apk update; apk --no-cache upgrade; \
    apk add --no-cache mysql mysql-client bash supervisor

COPY start.sh /config.sql /
COPY supervisord.conf /etc/supervisord.conf
VOLUME	/var/lib/mysql
EXPOSE 3306
ENTRYPOINT ./start.sh
