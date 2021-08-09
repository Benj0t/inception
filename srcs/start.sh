docker-compose down 
docker system prune

sudo rm -rf ~/data
mkdir -p ~/data/wp ~/data/db
wget https://wordpress.org/wordpress-5.3.2.tar.gz
mv wordpress-5.3.2.tar.gz ~/data/wp/
tar -zxvf ~/data/wp/wordpress-5.3.2.tar.gz -C ~/data/wp/
rm ~/data/wp/wordpress-5.3.2.tar.gz
mv  ~/data/wp/wordpress/* ~/data/wp/
rm -rf ~/data/wp/wordpress

echo '127.0.0.1 bemoreau.42.fr' >> /etc/hosts 
echo '127.0.0.1 www.bemoreau.42.fr' >> /etc/hosts
