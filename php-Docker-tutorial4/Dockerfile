FROM php:8.0-apache

WORKDIR /var/html/path

RUN apt-get update -y && apt-get install -y libmariadb-dev
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo pdo_mysql