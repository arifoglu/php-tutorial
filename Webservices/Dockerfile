FROM php:fpm


RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo pdo_mysql

# Install SOAP extension
RUN apt-get update && \
    apt-get install -y \
        libxml2-dev && \
    docker-php-ext-install soap