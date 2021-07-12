mysql_install_db
service mysql start
mysql -e "CREATE USER 'wordpress'@'localhost' identified by 'lol';" &&\
    mysql -e "CREATE DATABASE IF NOT EXISTS wordpress;" &&\
	mysql -e "GRANT ALL PRIVILEGES ON *.* TO 'wordpress'@'localhost' IDENTIFIED BY 'j5ufPOh66pUP9unf';" &&\
    mysql -e "ALTER USER 'root'@'localhost' IDENTIFIED BY 'Uib36u247YSqKtR3';" &&\
	mysql -e "FLUSH PRIVILEGES;"

service mysql stop

mysqld