#!/bin/bash

# create web directory
mkdir /var/www/localhost

# configure nginx
cp /etc/nginx/sites-available/default /etc/nginx/sites-available/default.old
cp /root/nginx.conf /etc/nginx/sites-available/default
cp /root/info.php /var/www/localhost/
