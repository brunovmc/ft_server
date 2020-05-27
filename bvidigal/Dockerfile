FROM debian:buster

COPY srcs /root/

# update upgrade intall wget run server-config

RUN apt-get update && \
	apt-get upgrade -u && \
	apt-get install -y wget && \
	bash /root/server-config.sh

ENTRYPOINT bash /root/start.sh


CMD bash

