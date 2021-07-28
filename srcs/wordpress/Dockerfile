FROM alpine:latest

# ENV PHP_FPM_USER="www"
# ENV PHP_FPM_GROUP="www"
# ENV PHP_FPM_LISTEN_MODE="0660"
# ENV PHP_MEMORY_LIMIT="512M"
# ENV PHP_MAX_UPLOAD="50M"
# ENV PHP_MAX_FILE_UPLOAD="200"
# ENV PHP_MAX_POST="100M"
# ENV PHP_DISPLAY_ERRORS="On"
# ENV PHP_DISPLAY_STARTUP_ERRORS="On"
# ENV PHP_ERROR_REPORTING="E_COMPILE_ERROR\|E_RECOVERABLE_ERROR\|E_ERROR\|E_CORE_ERROR"
# ENV PHP_CGI_FIX_PATHINFO=0

# Install PHP

RUN apk update && \
	apk add --no-cache php7-fpm php7-session php7-mcrypt php7-soap php7-openssl php7-gmp php7-pdo_odbc\
	php7-json php7-dom php7-pdo php7-zip php7-mysqli php7-sqlite3 php7-apcu php7-pdo_pgsql\
	php7-bcmath php7-gd php7-odbc php7-pdo_mysql php7-pdo_sqlite php7-gettext php7-xmlreader\
	php7-xmlrpc php7-bz2 php7-iconv php7-pdo_dblib php7-curl php7-ctype php

RUN adduser -D -g 'www' www

## Configuration
RUN echo "listen = 9000" >> /etc/php7/php-fpm.d/www.conf
RUN echo "access.log = /var/log/$pool.access.log" >> /etc/php7/php-fpm.d/www.conf
RUN mkdir -p /var/www/inception
RUN chown -R www:www /var/www
RUN chmod 777 /var/www/inception/
RUN mkdir -p /run/php/
RUN chown www:www /var/run/php
WORKDIR /var/www/inception

EXPOSE 9000

ENTRYPOINT php-fpm7 --nodaemonize