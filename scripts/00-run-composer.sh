#!/usr/bin/env bash
echo "Running composer"
composer install --no-dev --working-dir=/var/www/html

service nginx stop
php -S 0.0.0.0:80 -t /var/www/html/public/
