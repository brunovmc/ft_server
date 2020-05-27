mkdir /var/www/localhost

cp /root/nginx.conf /etc/nginx/sites-available/default

# ln -s /etc/nginx/sites-available/localhost/ /etc/nginx/sites-enabled/

cp /root/info.php /var/www/localhost/

wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-english.tar.gz

tar -xzvf phpMyAdmin-5.0.2-english.tar.gz

rm -rf  phpMyAdmin-5.0.2-english.tar.gz

mv  phpMyAdmin-5.0.2-english /var/www/localhost/phpmyadmin

chown -R www-data:www-data /var/www/localhost/phpmyadmin

#instalar wordpress

#cria bando de dados e senha vazia
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
