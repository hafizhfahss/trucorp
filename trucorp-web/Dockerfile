FROM php:7.4-apache

COPY index.php /var/www/html/

RUN chown www-data /var/www -R
RUN chmod 774 -R /var/www

RUN apt-get update
RUN docker-php-ext-install mysqli
RUN service apache2 restart
