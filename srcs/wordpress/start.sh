cd /var/www

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

wp core download
wp config create --dbhost=mysql-svc --dbname=wordpress --dbuser=mysql --dbpass=mysql --skip-check

php-fpm7
mysql wordpress -hmysql-svc -umysql -pmysql -e';';
until [ $? -eq 0 ]
do
    sleep 3;
    mysql wordpress -hmysql-svc -umysql -pmysql -e';';
done;

wp core install --url=http://192.168.99.100:5050 --title="olaurine's k8s services" --admin_user="olaurine" --admin_password="olaurine" --admin_email="veldergard@gmail.com"
wp user create editor editor@gmail.com --role=editor --user_pass=editor
wp user create author author@gmail.com --role=author --user_pass=author
wp user create Vladimir Vladimir@gmail.com --role=subscriber --user_pass=Vladimir
wp user create Viktor Viktor@gmail.com --role=subscriber --user_pass=Viktor

nginx -g 'daemon off;'
