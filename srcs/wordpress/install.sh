cd /var/www

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

wp core download --path=/var/www/
wp config create --dbhost=mysql-svc --dbname=wordpress --dbuser=mysql --dbpass=mysql --skip-check
chmod -R 755 /var/www /var/lib/nginx /var/www/*
