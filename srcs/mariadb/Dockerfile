FROM debian:buster

RUN apt update
RUN apt upgrade -y
RUN apt install mariadb-server -y

RUN cp /usr/share/mysql/mysql.init /etc/init.d/mariadb
RUN chmod 755 /etc/init.d/mariadb
RUN update-rc.d mariadb defaults
RUN mkdir -p /var/run/mysqld
RUN chown mysql:root /var/run/mysqld

## Database
COPY srcs/wordpress.sql /tmp
RUN service mariadb start && \
mysql -Bse "CREATE USER 'wordpress'@'localhost' IDENTIFIED BY 'j5ufPOh66pUP9unf'; \
CREATE USER 'phpmyadmin'@'localhost' IDENTIFIED BY 'mEa9t25g3C5jW2AG'; \
CREATE DATABASE wordpress; \
CREATE DATABASE phpmyadmin; \
GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpress'@'localhost'; \
GRANT ALL PRIVILEGES ON phpmyadmin.* TO 'phpmyadmin'@'localhost'; \
ALTER USER 'root'@'localhost' IDENTIFIED BY 'Uib36u247YSqKtR3'; \
FLUSH PRIVILEGES;" && \
mysql -u root -pUib36u247YSqKtR3 wordpress < /tmp/wordpress.sql && \
mysql -u root -pUib36u247YSqKtR3 < /var/www/inception/phpmyadmin/sql/create_tables.sql
RUN rm -f /tmp/wordpress.sql
