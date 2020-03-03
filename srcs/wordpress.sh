#!/usr/bin/expect

wget https://wordpress.org/latest.zip
unzip latest.zip
rm -rf latest.zip
mv wp-config.php  wordpress
mv wordpress /var/www/html/wordpress

# mv index.php /var/www/html