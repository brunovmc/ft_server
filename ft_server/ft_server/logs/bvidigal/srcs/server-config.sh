apt-get install -y nginx \
	php7.3 \
	php-fpm \
	php-mysql \
	php-cli \
	php-mbstring \
	mariadb-server

mkdir /var/www/localhost

cp /root/nginx.conf /etc/nginx/sites-available/default

cp /root/info.php /var/www/localhost/

#get phpmyadmin tar
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-english.tar.gz
#unzip it
tar -xzvf phpMyAdmin-5.0.2-english.tar.gz
#remove tar file
rm -rf  phpMyAdmin-5.0.2-english.tar.gz
#move to localhost folder
mv  phpMyAdmin-5.0.2-english /var/www/localhost/phpmyadmin

chown -R www-data:www-data /var/www/localhost/phpmyadmin






#instalar wordpress

#cria banco de dados e senha vazia
echo "CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;" | mysql -u root
mysqladmin --user=root password ""

# download wordpress tar
wget https://wordpress.org/latest.tar.gz

#unzip
tar -xzvf latest.tar.gz

#delete tar file
rm -rf latest.tar.gz

#copy wordpress-config file into wordpress folder
cp /root/wp-config.php wordpress/wp-config.php

#move wordpress folder to localhost
mv wordpress /var/www/localhost/

