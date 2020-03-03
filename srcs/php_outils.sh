# !bin/bash

# Install PHP extensions

wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-all-languages.zip

unzip phpMyAdmin-5.0.1-all-languages.zip

rm -r phpMyAdmin-5.0.1-all-languages.zip

mv phpMyAdmin-5.0.1-all-languages /var/www/html/phpmyadmin

apt-get install -y php-fpm

mkdir /var/www/html/phpmyadmin/tmp

chmod -R 777 /var/www/html/phpmyadmin/tmp

rm /var/www/html/phpmyadmin/config.sample.inc.php 

mv config.inc.php /var/www/html/phpmyadmin/

apt-get update