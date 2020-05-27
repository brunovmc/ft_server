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


#instalar wordpress

# download wordpress tar
wget https://wordpress.org/latest.tar.gz

#unzip
tar -xzvf latest.tar.gz

#delete tar file
rm -rf latest.tar.gz

#copy wordpress-config file into wordpress folder
cp wp-config.php /wordpress/wp-config.php

#move wordpress folder to localhost
mv wordpress /var/www/localhost/

