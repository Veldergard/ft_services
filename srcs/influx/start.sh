/influxdb/influxd > var/log/inf_start.log & sleep 20
/influxdb/influx setup -u "root" -p "root1234" -o "school21" -b "school21" -r 0 -f
# telegraf --input-filter docker --output-filter influxdb_v2 config > /etc/telegraf/telegraf.conf
export INFLUX_TOKEN=$(/influxdb/influx auth list | grep "root's Token" | cut -d$'\t' -f3)
# sed -i "s/\$INFLUX_TOKEN/$INFLUX_TOKEN/g" /etc/telegraf/telegraf.conf
/usr/bin/telegraf --config /etc/telegraf/telegraf.conf
