# if [ ! -d "/var/lib/mysql/wordpress" ]; then 
    
#     mysql_install_db
#     service mysql start
    
#     mysql -e "CREATE USER 'ben'@'localhost' identified by 'jamin';" &&\
# 	mysql -e "CREATE DATABASE IF NOT EXISTS wordpress;" &&\
# 	mysql -e "GRANT ALL PRIVILEGES ON *.* TO 'ben'@'%' IDENTIFIED BY 'jamin';" &&\
# 	mysql -e "FLUSH PRIVILEGES;"
#     service mysql stop 
# fi
# mysql

mysql_install_db
cd '/usr' ; /usr/bin/mysqld_safe --datadir='/home/mariadb'