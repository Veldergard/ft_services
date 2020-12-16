# sed -i 's/skip-networking/#skip-networking/g' /etc/my.cnf.d/mariadb-server.cnf
mysql_install_db
/usr/bin/mysqld_safe --init_file=/config.sql
