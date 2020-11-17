minikube stop
minikube delete
minikube start
eval $(minikube docker-env)

minikube dashboard &

minikube addons enable metallb
kubectl apply -f srcs/k8s/metallb-config.yaml

docker build srcs/nginx -t "nginx:k8s"
kubectl apply -f srcs/k8s/nginx.yaml
