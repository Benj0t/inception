mysql_install_db
service mysql start
mysql -u root -e "CREATE USER '${MDB_USR}'@'%' identified by '${MDB_PWD}';" &&\
    mysql -u root -e "CREATE DATABASE IF NOT EXISTS wordpress;" &&\
	mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO '${MDB_USR}'@'%' IDENTIFIED BY '${MDB_PWD}';" &&\
	mysql -u root -e "FLUSH PRIVILEGES;"
service mysql stop
mysqld