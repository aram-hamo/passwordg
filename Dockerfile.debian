FROM debian

RUN apt update && apt install php apache2 pwgen -y
RUN a2ensite default-ssl
RUN a2enmod ssl
RUN rm /var/www/html/index.html
COPY src/* /var/www/html/

ENTRYPOINT apachectl start && tail -f /var/log/apache2/access.log 
