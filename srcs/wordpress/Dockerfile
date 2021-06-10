FROM debian:buster

RUN apt update
RUN apt upgrade -y
RUN apt install php php-cli php-mysql php-gd php-xml php-fpm -y

COPY ./web.tar.gz /tmp
RUN mkdir -p /var/www
RUN tar xzf /tmp/web.tar.gz -C /var/www
RUN rm -f /tmp/web.tar.gz

COPY /php-fpm/inception.conf /etc/php/7.4/fpm/pool.d