#!/bin/sh

service mysql start

# rigths
chmod 777 -R .

# ssl
mkdir ../etc/nginx/ssl
openssl req -x509 -nodes -days 730 -newkey rsa:2048 \
-keyout ../etc/nginx/ssl/nginx-selfsigned.key \
-out ../etc/nginx/ssl/nginx-selfsigned.crt \
-subj "/C=RU/ST=Moscow/L=Moscow/O=21/OU=swquinc/CN=localhost"

# nginx
rm ../etc/nginx/sites-available/default
rm ../etc/nginx/sites-enabled/default
cp localhost ../etc/nginx/sites-enabled/localhost
mv localhost ../etc/nginx/sites-available/localhost

# database
mariadb < db.sql

# wordpress
mv wordpress ../var/www/html
mv wp-config.php ../var/www/html/wordpress

# phpMyAdmin
mv phpMyAdmin-4.9.5-all-languages ../var/www/html/phpmyadmin

# autoindex
cp autoindex.sh ../

# rights
chown -R www-data:www-data /var/www/
chmod 777 -R ../var/www/*

service nginx start
service php7.3-fpm start
bash
