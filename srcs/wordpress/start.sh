cd /var/www

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

wp core download --path=/var/www/
wp config create --dbhost=mysql-svc --dbname=wordpress --dbuser=mysql --dbpass=mysql --skip-check
chmod -R 755 /var/www /var/lib/nginx /var/www/*

php-fpm7
mysql wordpress -hmysql-svc -umysql -pmysql -e';';
until [ $? -eq 0 ]
do
    sleep 3;
    mysql wordpress -hmysql-svc -umysql -pmysql -e';';
done;
if ! wp core is-installed ; then
    wp core install --url=http://192.168.99.100:5050 --title="olaurine's k8s services" --admin_user="olaurine" --admin_password="olaurine" --admin_email="veldergard@gmail.com"
    wp user create Annie annie@gmail.com --role=editor --user_pass=annie
    wp user create Babay bebs@gmail.com --role=author --user_pass=bebs
    wp user create Vladimir vladimir@gmail.com --role=contributor --user_pass=vladimir
    wp user create Viktor viktor@gmail.com --role=subscriber --user_pass=viktor
fi
nginx -g 'daemon off;'
