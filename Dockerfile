#base image (OS)
FROM debian:buster

RUN apt update 

COPY srcs/* /

RUN bash installations.sh
RUN bash nginx.sh
RUN bash php_outils.sh
RUN bash mysql.sh
COPY srcs/nginx-selfsigned.crt /etc/ssl/certs/
COPY srcs/nginx-selfsigned.key /etc/ssl/private/
COPY srcs/default /etc/nginx/sites-available 
RUN bash wordpress.sh

entrypoint bash script.sh
