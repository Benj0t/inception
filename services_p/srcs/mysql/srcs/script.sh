#!/bin/sh

telegraf &
mariadb-install-db -u root --datadir=/var/lib/mysql
mysqld -u root --init-file=/tmp/init.sql & sleep 3
mysql -u root wordpress < /tmp/config.sql
pkill mysqld & sleep 3
exec mysqld -u root