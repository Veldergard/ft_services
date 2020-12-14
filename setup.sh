services=("nginx" "wordpress" "ftps" "phpmyadmin" "mysql" "influx" "grafana")

minikube stop
minikube delete
minikube start --vm-driver=virtualbox --disk-size 8GB
eval $(minikube docker-env)

minikube addons enable metallb
kubectl apply -f srcs/k8s/metallb-config.yaml

for service in "${services[@]}"
do
    docker build srcs/${service} -t "${service}:k8s"
done

for service in "${services[@]}"
do
kubectl apply -f srcs/k8s/${service}.yaml
done
