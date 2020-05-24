# getting base image
FROM debian:buster

# use this mode when you need zero interaction while installing
# or upgrading the system via apt
# it accepts the default answer for all questions
ARG DEBIAN_FRONTEND=noninteractive

RUN apt-get update && \
	apt-get upgrade -u && \
	apt-get install -y nginx	

CMD echo "Hello World"
