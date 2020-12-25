FROM alpine

RUN apk update; apk --no-cache upgrade; apk add bash openssl vsftpd supervisor --no-cache;

RUN openssl req -newkey rsa:2048 -x509 -sha256 -days 30 -nodes \
    -out /etc/vsftpd/vsftpd.crt \
    -keyout /etc/vsftpd/vsftpd.key \
    -subj "/C=RU/ST=Kazan/L=Kazan/O=21 School/OU=olaurine/CN=olaurine";

RUN echo 'root:toor' | chpasswd; \
    touch /var/log/xferlog; \
    mkdir -p /var/ftp

COPY supervisord.conf /etc/supervisord.conf
COPY vsftpd.conf /etc/vsftpd/vsftpd.conf
EXPOSE 21 10100
ENTRYPOINT ["supervisord", "--nodaemon", "--configuration", "/etc/supervisord.conf"]
