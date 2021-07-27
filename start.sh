docker-compose down 
docker system prune
if [ -d "/home/$USER/data/" ]
then
    rm -rf ~/data/
fi
mkdir -p ~/data/wp ~/data/db
wget https://wordpress.org/wordpress-5.3.2.tar.gz
mv wordpress-5.3.2.tar.gz ~/data/wp/
tar -zxvf ~/data/wp/wordpress-5.3.2.tar.gz -C ~/data/wp/
rm ~/data/wp/wordpress-5.3.2.tar.gz
cp srcs/wordpress/srcs/wp-config.php ~/data/wp/wp-config.php
mv  ~/data/wp/wordpress/* ~/data/wp/
rm -rf ~/data/wp/wordpress