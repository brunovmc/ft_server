#!/bin/bash

apt-get install -y --no-install-recommends apt-utils	\
			mariadb-server 	\
			nginx		\
			php7.3 php7.3-fpm php7.3-mysql php7.3-cli php7.3-mbstring	\
			wget


mkdir /var/www/localhost

cd /root

# MyPhpAdmin instalação
wget --no-check-certificate https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-english.tar.gz
tar -xf phpMyAdmin-5.0.2-english.tar.gz && rm -rf phpMyAdmin-5.0.2-english.tar.gz
mv phpMyAdmin-5.0.2-english /var/www/localhost/phpmyadmin
cp -pr /root/config.inc.php /var/www/localhost/phpmyadmin/config.inc.php
cp -pr /root/nginx.conf /etc/nginx/sites-available/default
chown -R www-data:www-data /var/www/localhost/phpmyadmin

# Informações de PHP
cp /root/info.php /var/www/localhost


## cria DB e acesso root
echo "CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;" | mysql -u root
mysqladmin --user=root password ""


mv /root/info.php /var/www/localhost


