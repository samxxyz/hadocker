FROM php:8.1-apache

RUN apt-get update && \
    docker-php-ext-install mysqli pdo pdo_mysql

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2

EXPOSE 80
EXPOSE 443

WORKDIR /var/www/html
RUN chmod -R 755 /var/www/html
#RUN chmod -R 755 /var/www/html/system/sessions

RUN apt-get install nano -y

COPY ./app /var/www/html
COPY ./conf/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

CMD ["apache2ctl", "-D", "FOREGROUND"]
