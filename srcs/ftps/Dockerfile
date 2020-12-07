FROM alpine:latest

RUN apk update; apk --no-cache upgrade; apk add openssl vsftpd --no-cache;

RUN openssl req -newkey rsa:2048 -x509 -sha256 -days 30 -nodes \
-out /etc/vsftpd/vsftpd.crt \
-keyout /etc/vsftpd/vsftpd.key \
-subj "/C=RU/ST=Kazan/L=Kazan/O=21 School/OU=olaurine/CN=olaurine";

RUN echo 'root:root' | chpasswd; \
touch /var/log/xferlog; mkdir -p /home/root

COPY vsftpd.conf /etc/vsftpd/vsftpd.conf

VOLUME ["sys/fs/cgroup"]

EXPOSE 21 21000

ENTRYPOINT vsftpd /etc/vsftpd/vsftpd.conf
