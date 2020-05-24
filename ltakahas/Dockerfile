# getting base image
FROM debian:buster

# use this mode when you need zero interaction while installing
# or upgrading the system via apt
# it accepts the default answer for all questions
ARG DEBIAN_FRONTEND=noninteractive

# update and install nginx, mariadb and php
RUN apt-get update && \
	apt-get upgrade -u && \
	apt-get install -y nginx \
	mariadb-server \
	php php-fpm php-mysql php-mbstring

CMD echo "Hello World"
