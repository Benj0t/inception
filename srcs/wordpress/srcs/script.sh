sleep 5;
wp core install --allow-root --url='bemoreau.42.fr' --title='Inception' --admin_user='bemoreau'  --admin_password='BenjaminBemoreau'  --admin_email="admin@admin.fr" --path='/var/www/inception';
wp  user create --allow-root 'mickael' user2@user.com --user_pass='Mickaelmtordjma' --role=author
wp theme install --allow-root dark-mode --activate     

php-fpm7.3 --nodaemonize