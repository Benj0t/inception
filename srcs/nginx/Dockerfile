FROM debian:buster

RUN apt update
RUN apt upgrade -y
RUN apt install software-properties-common gettext-base dirmngr gnupg2 ca-certificates nginx openssl -y

COPY ./srcs/nginx.conf /etc/nginx
COPY ./srcs/inception.conf /etc/nginx/conf.d
RUN rm -f /etc/nginx/conf.d/default.conf
RUN chmod -R 600 /etc/nginx/conf.d/inception.conf

RUN openssl req -newkey rsa:4096 -x509 -sha3-256 -days 365 -nodes \
-subj "/C=FR/ST=Paris/L=Paris/O=42/OU=Student Projects/CN=inception" \
-out /etc/ssl/private/inception.crt -keyout /etc/ssl/private/inception.key

EXPOSE 443

ENTRYPOINT nginx -g "daemon off;"