FROM debian:buster

COPY srcs /root/

# update and install nginx

RUN apt-get update && \
	apt-get upgrade -u && \
	apt-get install -y nginx


# run server indefinetly
CMD tail -f /dev/null
