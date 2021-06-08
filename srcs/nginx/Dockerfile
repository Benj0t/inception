FROM debian:buster

RUN apt update
RUN apt upgrade -y
RUN apt install nginx -y

COPY srcs/nginx/nginx.conf /etc/nginx
COPY srcs/nginx/ft_server.conf /etc/nginx/conf.d
RUN rm -f /etc/nginx/conf.d/default.conf
RUN chmod -R 600 /etc/nginx/conf.d/ft_server.conf