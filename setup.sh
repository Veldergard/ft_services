minikube start
eval $(minikube docker-env)

# Dashboard
minikube dashboard &

# install MetalLB
minikube addons enable metallb
kubectl apply -f srcs/metallb-config.yaml
