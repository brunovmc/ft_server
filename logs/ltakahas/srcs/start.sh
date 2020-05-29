#!/bin/bash

# start nginx, mariadb and php
/etc/init.d/nginx start
/etc/init.d/mysql start
/etc/init.d/php7.3-fpm start
