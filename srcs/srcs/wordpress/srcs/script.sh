sleep 5;
wp core config --allow-root --dbname=wordpress --dbuser=$MDB_USR --dbpass=$MDB_PWD --dbhost=mariadb:3306
wp core install --allow-root --url='bemoreau.42.fr' --title='Inception' --admin_user=${ADM_LOG}  --admin_password=${ADM_PASS}  --admin_email="admin@admin.fr" --path='/var/www/inception';
wp  user create --allow-root ${USR_LOG} user2@user.com --user_pass=${USR_PASS} --role=author
wp theme install --allow-root dark-mode --activate     

php-fpm7.3 --nodaemonize