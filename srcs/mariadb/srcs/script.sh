# if [ ! -d "/var/lib/mysql/wordpress" ]; then 
mysql_install_db
service mysql start

# mysql -e "CREATE USER 'wordpress'@'localhost' IDENTIFIED BY 'j5ufPOh66pUP9unf';" &&\
# mysql -e "CREATE DATABASE wordpress;" &&\
# mysql -e "GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpress'@'localhost';" &&\
# mysql -e "ALTER USER 'root'@'localhost' IDENTIFIED BY 'Uib36u247YSqKtR3';" &&\
# mysql -e "FLUSH PRIVILEGES;"
# mysql -u root -pUib36u247
service mysql stop

mysqld