#!/usr/bin/env bash
echo "Running composer"
composer install --no-dev --working-dir=/var/www/html

echo "Sopping nginx"
systemctl stop nginx

echo "Starting php built-in server"
php -S 0.0.0.0:80 -t /var/www/html/public/
