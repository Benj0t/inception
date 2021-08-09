FROM debian:buster

RUN apt-get update
RUN apt-get install -y php7.3-fpm php7.3-common php7.3-mysql \
	php7.3-gmp php7.3-curl  php7.3-intl php7.3-mbstring 7.3-xmlrpc \
	php7.3-gd php7.3-xml php7.3-cli php7.3-zip php7.3-soap php7.3-imap \
	php7.3-fpm wget curl openssl sendmail  mariadb-client vim procps;  
COPY srcs/script.sh .
RUN chmod +x /script.sh

# RUN adduser 'www' www
#  -D -g 'www' www
RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

## Configuration
RUN echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf
RUN echo "access.log = /var/log/$pool.access.log" >> /etc/php/7.3/fpm/pool.d/www.conf
RUN mkdir -p /var/www/inception
RUN chown -R www-data:www-data /var/www/inception
RUN chmod 777 /var/www/inception/
RUN mkdir -p /run/php/
# RUN chown www:www /var/run/php
WORKDIR /var/www/inception

EXPOSE 9000

ENTRYPOINT /script.sh