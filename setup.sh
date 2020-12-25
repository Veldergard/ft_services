services=("wordpress" "phpmyadmin" "mysql" "nginx" "ftps" "influxdb" "grafana")

minikube stop
minikube delete
minikube start --vm-driver=virtualbox --disk-size 12GB --memory 2400
if [ $? -ne 0 ]
then
    exit;
fi
eval $(minikube docker-env)

minikube addons enable metallb

for service in "${services[@]}"
do
    docker build srcs/${service} -t "${service}:k8s"
done

minikube dashboard &
kubectl apply -k srcs/k8s
