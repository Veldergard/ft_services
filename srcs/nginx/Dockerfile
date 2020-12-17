FROM alpine:latest

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

EXPOSE 22 80 443

CMD nginx -g 'daemon off;'
