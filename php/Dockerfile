FROM php:8.0-apache

WORKDIR /var/www/laravel_docker

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

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - && apt install -y nodejs

RUN a2enmod rewrite

