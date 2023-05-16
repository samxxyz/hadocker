FROM mariadb:latest

EXPOSE 3306

USER root
RUN chmod 755 /var/lib/mysql

WORKDIR /var/lib/mysql
COPY laundry.sql /var/lib/mysql/laundry.sql

