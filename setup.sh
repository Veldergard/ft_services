services=("nginx" "wp", "ftps", "phpmyadmin", "mysql", "influxdb", "grafana")

minikube stop
minikube delete
minikube start --vm-driver=virtualbox --disk-size 8GB
eval $(minikube docker-env)

minikube dashboard &

minikube addons enable metallb
kubectl apply -f srcs/k8s/metallb-config.yaml

for service in "${services[@]}"
do
    printf "docker build ${service}: "
    docker build srcs/${service} -t "${service}:k8s"
    printf "status - OK\n"
    kubectl apply -f srcs/k8s/${service}.yaml
done
docker build srcs/mysql -t "mysql:k8s"
kubectl apply -f srcs/k8s/mysql.yaml
