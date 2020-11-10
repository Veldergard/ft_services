mkdir -p ~/goinfre/.docker
[ -f ~/.docker ] || ln -s ~/goinfre/.docker ~/.docker
mkdir -p ~/goinfre/.minikube
[ -f ~/.minikube ] || ln -s ~/goinfre/.minikube ~/.minikube
brew reinstall minikube

# docker-machine create olaurine
# eval $(docker-machine env olaurine)
