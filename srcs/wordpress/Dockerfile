FROM debian:buster

RUN apt update
RUN apt upgrade -y
RUN apt install wget -y
RUN apt-get install apt-transport-https lsb-release ca-certificates -y
RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
RUN echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" >> /etc/apt/sources.list.d/php.list
RUN apt-get install php7.3 php7.3-opcache libapache2-mod-php7.3 php7.3-mysql php7.3-curl php7.3-json php7.3-gd  php7.3-intl php7.3-mbstring php7.3-xml php7.3-zip php7.3-fpm php7.3-readline -y
RUN apt-get update

COPY ./web.tar.gz /tmp
RUN mkdir -p /var/www
RUN tar xzf /tmp/web.tar.gz -C /var/www
RUN rm -f /tmp/web.tar.gz

COPY /php-fpm/inception.conf /etc/php/7.3/fpm/pool.d

RUN service php7.3-fpm start && tail -f /dev/null