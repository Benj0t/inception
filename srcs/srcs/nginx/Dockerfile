FROM debian:buster

RUN apt update
RUN apt upgrade -y
RUN apt install software-properties-common gettext-base dirmngr gnupg2 ca-certificates nginx openssl -y


COPY ./srcs/nginx.conf /etc/nginx
COPY ./srcs/inception.conf /etc/nginx/conf.d
RUN rm -f /etc/nginx/conf.d/default.conf
RUN chmod -R 600 /etc/nginx/conf.d/inception.conf

RUN mkdir /etc/nginx/ssl
RUN openssl req -newkey rsa:4096 -x509 -days 365 -nodes -out /etc/nginx/ssl/www.bemoreau.42.fr.crt -keyout /etc/nginx/ssl/www.bemoreau.42.fr.key -subj "/C=FR/ST=Paris/CN=bemoreau"
RUN chmod 777 /etc/nginx/ssl/*
RUN chmod 777 -R /var/www 
RUN chmod 777 /etc/nginx/ssl/*
RUN chmod 777 -R /var/www 

EXPOSE 443

ENTRYPOINT nginx -g "daemon off;"