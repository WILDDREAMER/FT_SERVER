# !bin/bash

chown -R mysql: /var/lib/mysql

service mysql start
service php7.3-fpm start
mysql --user=root -e "CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';GRANT ALL PRIVILEGES ON * . * TO 'admin'@'localhost';FLUSH PRIVILEGES;"

#CREATE DATABASE	
mysql --user=root -e "CREATE DATABASE wordpress;GRANT ALL PRIVILEGES on wordpress.* TO 'admin'@'localhost' IDENTIFIED BY 'root';FLUSH PRIVILEGES;"
chown -R www-data:www-data /var/www/html/wordpress/

apt update

nginx -g "daemon off;"
service nginx start
# echo "CREATE USER 'root'@localhost IDENTIFIED BY 'admin';" | mysql -u root -p admin
# echo "GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost';" | mysql -u root -p admin
# echo "FLUSH PRIVILEGES;" | mysql -u root -p admin
# echo "CREATE DATABASE server_db;" | mysql -u root -p admin
# nginx -g 'daemon off;'

