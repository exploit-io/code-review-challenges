FROM php:7.2-apache

RUN apt update
RUN docker-php-ext-install mysqli pdo pdo_mysql

ADD . /var/www/html/

RUN cp /var/www/html/reg.php /var/www/html/reg.txt
