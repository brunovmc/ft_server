# Start with the correct Debian Image
FROM debian:buster
COPY srcs /root/

#run something
RUN bash /root/server_config.sh

# ponto de entrada
ENTRYPOINT bash /root/start_services.sh

# echo done
CMD bash 
