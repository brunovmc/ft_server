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


