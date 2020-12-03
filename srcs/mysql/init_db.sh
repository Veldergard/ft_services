until mysql
do
  printf "mysql starting"
done

echo "DROP DATABASE test" | mysql -u root --skip-password
echo "CREATE DATABASE wordpress;" | mysql -u root --skip-password
echo "CREATE USER 'user'@'%' IDENTIFIED BY 'password';" | mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'user'@'%' WITH GRANT OPTION;" | mysql -u root --skip-password
echo "FLUSH PRIVILEGES;" | mysql -u root --skip-password
mysql wordpress -u root --skip-password < wordpress.sql
