FROM php:8.1-apache

WORKDIR /var/www/laravel_docker

RUN echo "UTC" > /etc/timezone

COPY . .

RUN apt update -y \
    && apt install -y  \
    g++  \
    libicu-dev  \
    libpq-dev  \
    libzip-dev  \
    zip  \
    zlib1g-dev  \
    git  \
    && docker-php-ext-install intl opcache pdo pdo_pgsql pgsql

# Installing composer
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN rm -rf composer-setup.php

RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - && apt install -y nodejs

RUN composer install --optimize-autoloader --no-dev
RUN cp .env.example .env

RUN php artisan route:cache

RUN a2enmod rewrite

# Configure Laravel logs
RUN ln -sf /dev/stdout /var/www/laravel_docker/storage/laravel.log

COPY . .
