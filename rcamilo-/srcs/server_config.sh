#!/bin/bash

apt-get update
apt-get -y  upgrade
apt-get install -y mariadb-server 	\
		   nginx		\
		   php7.3 php-fpm php-mysql php-cli php-mbstring

mkdir /var/www/localhost

bash /root/services_config.sh

