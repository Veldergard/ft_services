FROM alpine

#installing main programs
RUN apk update; apk upgrade; \
apk add vim nginx sudo openrc openssl openssh bash supervisor

#SSL creating
RUN openssl req -newkey rsa:2048 -x509 -sha256 -days 30 -nodes -out /etc/ssl/private/olaurine.crt \
	-keyout /etc/ssl/private/olaurine.key -subj "/C=RU/ST=Kazan/L=Kazan/O=21 School/OU=olaurine/CN=olaurine"

#adding user for ssh
RUN adduser -D olaurine && echo 'olaurine:123' | chpasswd && addgroup olaurine wheel && echo '%wheel ALL=(ALL) ALL' > /etc/sudoers.d/wheel \
&& /usr/bin/ssh-keygen -A

#deleting and config files
RUN rm /etc/nginx/conf.d/default.conf && mv /nginx.conf /etc/nginx/conf.d/ \
&& mv /index.html /var/www/ \
&& mkdir /run/nginx /var/run/sshd && mv /supervisord.conf /etc/supervisord.conf

#listening ports
EXPOSE 22 80 443

#launch server
CMD		["usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
