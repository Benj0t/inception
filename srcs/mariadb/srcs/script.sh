mysql_install_db
service mysql start
mysql -u root -e "CREATE USER 'wordpress'@'%' identified by 'j5ufPOh66pUP9unf';" &&\
    mysql -u root -e "CREATE DATABASE IF NOT EXISTS wordpress;" &&\
	mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'wordpress'@'%' IDENTIFIED BY 'j5ufPOh66pUP9unf';" &&\
    # mysql -u root -e "ALTER USER 'root'@'%';" &&\
	mysql -u root -e "FLUSH PRIVILEGES;"
service mysql stop
mysqld

# bind-address /etc/mysql/mysql.conf.d/50-server.cnf bind-address = 0.0.0.0
# 
#
#
#
#
#
#
