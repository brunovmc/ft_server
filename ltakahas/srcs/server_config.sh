#!/bin/bash

# create web directory
mkdir /var/www/localhost

# configure nginx
cp /etc/nginx/sites-available/default /etc/nginx/sites-available/default.old
cp /root/nginx.conf /etc/nginx/sites-available/default
cp /root/info.php /var/www/localhost/

# antes de começar instalação de phpmyadmin, tem que iniciar mysql
/etc/init.d/mysql start

# move to /root/ dir
cd /root

# download and install phpMyAdmin
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-english.tar.gz
tar xvf phpMyAdmin-5.0.2-english.tar.gz
rm -rf phpMyAdmin-5.0.2-english.tar.gz
mv phpMyAdmin-5.0.2-english/ /var/www/localhost/phpmyadmin
cp /root/config.inc.php /var/www/localhost/phpmyadmin/config.inc.php
# set www-data — the Linux user profile that web servers use by default for normal operations in Ubuntu and Debian systems — as the owner of this directory
chown -R www-data:www-data /var/www/localhost/phpmyadmin
