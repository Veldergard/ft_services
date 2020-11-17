services=("nginx" "mysql")
echo ${services[@]}
printf "docker build ${services[@]}: "
