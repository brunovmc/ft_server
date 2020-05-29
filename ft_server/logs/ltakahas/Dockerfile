# getting base image
FROM debian:buster

#
COPY srcs /root/

# update and install nginx, mariadb, php and wget
# php-mbstring: used to manage non-ASCII strings and convert strings to different encodings
RUN apt-get update && \
	apt-get upgrade -u && \
	apt-get install -y nginx \
	mariadb-server \
	php7.3 php7.3-fpm php-mysql php-mbstring php-cli\
	wget && \
	bash /root/server_config.sh

# ENTRYPOINT ./startup.sh && tail -f /dev/null

ENTRYPOINT bash /root/start.sh && \
	bash

# CMD tail -f /dev/null
