# utiliza debian buster como os
FROM debian:buster

# copia srcs pro root do debian os
COPY srcs /root/

# update upgrade e instala nginx e maria db
RUN	apt-get update && \
	apt-get upgrade && \
	apt-get install -y nginx \
	mariadb-server \
	php7.3 \
	php-fpm \
	php-mysql \
	php-cli \
	php-mbstring 

RUN	bash /root/server-config.sh

# o que ele vai executar quando inicia
ENTRYPOINT service nginx start && \
		service mysql start && \
		bash

CMD bash
