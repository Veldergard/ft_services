services=("wordpress" "phpmyadmin" "mysql" "nginx" "ftps" "influx" "grafana")

minikube stop
minikube delete
minikube start --vm-driver=virtualbox --disk-size 8GB
eval $(minikube docker-env)

minikube addons enable metallb

for service in "${services[@]}"
do
    docker build srcs/${service} -t "${service}:k8s"
done

minikube dashboard &
kubectl apply -k srcs/k8s
