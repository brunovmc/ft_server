FROM debian:buster

COPY srcs /root/

# update and install nginx

RUN apt-get update && \
	apt-get upgrade -u && \
	apt-get install -y wget && \
	bash /root/server-config.sh

ENTRYPOINT bash /root/start.sh

# run server indefinetly
# CMD tail -f /dev/null
