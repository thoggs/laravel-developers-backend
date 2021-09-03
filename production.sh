#!/bin/sh

# npm install dependencies
npm install --silent

# npm configure project
npm run prod

# Autoloader Optimization
composer install --optimize-autoloader --no-dev

# shellcheck disable=SC2225
cp .env.example .env

# generate key Laravel
php artisan key:generate

# clear Laravel cache
php artisan route:clear
php artisan config:clear
php artisan view:clear

# Optimizing Configuration Loading
php artisan config:cache

# Optimizing Route Loading
php artisan route:cache

# Optimizing View Loading
php artisan view:cache

php artisan migrate

php artisan db:seed --class=DevelopersSeeder
