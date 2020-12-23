# influxd > var/log/inf_start.log & sleep 20
# influx setup -u "root" -p "root1234" -o "school21" -b "school21" -r 0 -f
# export INFLUX_TOKEN=$(influx auth list | grep "root's Token" | cut -d$'\t' -f3)
# telegraf --config /etc/telegraf/telegraf.conf
# grep -l $INFLUX_TOKEN $(find . -name "*")
# sed -i "s/$INFLUX_TOKEN/PogChamp/g" configs
