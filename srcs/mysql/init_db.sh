until mysql
do
  sleep 1
done

# echo "DROP DATABASE test" | mysql -u root --skip-password
# echo "CREATE DATABASE wordpress;" | mysql -u root --skip-password
# echo "CREATE USER 'admin'@'%' IDENTIFIED BY 'admin';" | mysql -u root --skip-password
# echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'admin'@'%' WITH GRANT OPTION;" | mysql -u root --skip-password
# echo "FLUSH PRIVILEGES;" | mysql -u root --skip-password
mysql wordpress -u root --skip-password < wordpress.sql
