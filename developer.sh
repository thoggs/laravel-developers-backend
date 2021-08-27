#!/bin/sh

# npm install dependencies
npm install --silent

# npm configure project
npm run dev

# Autoloader Optimization
composer install

# shellcheck disable=SC2225
cp .env.example .env

# generate key Laravel
php artisan key:generate

php artisan route:clear

php artisan config:clear

php artisan view:clear
