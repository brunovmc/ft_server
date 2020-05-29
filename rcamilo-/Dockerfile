# Start with the correct Debian Image
FROM debian:buster
COPY srcs /root/

RUN printf "#!/bin/sh\nexit 0" > /usr/sbin/policy-rc.d

#run something
RUN bash /root/server_config.sh

RUN bash /root/services_config.sh

# ponto de entrada
ENTRYPOINT bash /root/start_services.sh

# echo done
CMD bash
