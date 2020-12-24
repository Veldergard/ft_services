FROM alpine

COPY nginx.conf index.html ./

RUN apk update; apk --no-cache upgrade; \
	apk add --no-cache nginx openssl openssh

RUN openssl req -newkey rsa:2048 -x509 -sha256 -days 30 -nodes \
	-keyout /etc/ssl/private/olaurine.key -out /etc/ssl/private/olaurine.crt \
	-subj "/C=RU/ST=Kazan/L=Kazan/O=21 School/OU=olaurine/CN=olaurine"

RUN rm /etc/nginx/conf.d/default.conf; \
	mv /nginx.conf /etc/nginx/conf.d/; \
	mv /index.html /var/www/; \
	mkdir /run/nginx

RUN adduser -D user; \
	echo "user:pass" | chpasswd; \
	ssh-keygen -A


EXPOSE 22 80 443

CMD /usr/sbin/sshd; nginx -g 'daemon off;'
