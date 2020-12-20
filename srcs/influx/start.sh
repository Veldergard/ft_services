./influxdb/influxd > var/log/inf_start.log & sleep 20
/influxdb/influx setup -u "root" -p "root1234" -o "school21" -b "school21" -r 0 -f
/usr/bin/telegraf --config /etc/telegraf/telegraf.conf
