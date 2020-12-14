until mysql
do
  sleep 1
done
mysql wordpress -u root --skip-password < wordpress.sql
