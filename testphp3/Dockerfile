FROM php:fpm

# Install any PHP extensions you need
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install pdo pdo_mysql 

#RUN a2enmod rewrite

# Installer Xdebug
# RUN pecl install xdebug \
# && docker-php-ext-enable xdebug

# Copier le fichier de configuration Xdebug dans le répertoire approprié
# COPY ./xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

