#!/bin/bash

set -xeuo pipefail

#sudo usermod -aG docker $(whoami) && newgrp docker
minikube delete
minikube config unset driver
minikube start --vm-driver=docker
eval $(minikube docker-env)

kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.5/manifests/namespace.yaml
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.5/manifests/metallb.yaml
kubectl create secret generic -n metallb-system memberlist --from-literal=secretkey="$(openssl rand -base64 128)"
kubectl apply -f srcs/configmap.yaml

docker build -t mysql srcs/mysql/
kubectl apply -f srcs/mysql/mysql.yaml

docker build -t phpmyadmin srcs/phpmyadmin/
docker build -t wordpress srcs/wordpress/
docker build -t nginx srcs/nginx/
docker build -t ftps srcs/ftps/
docker build -t influxdb srcs/influxdb/
docker build -t grafana srcs/grafana/

kubectl apply -f srcs/phpmyadmin/phpmyadmin.yaml
kubectl apply -f srcs/wordpress/wordpress.yaml
kubectl apply -f srcs/nginx/nginx.yaml
kubectl apply -f srcs/ftps/ftps.yaml
kubectl apply -f srcs/influxdb/influxdb.yaml
kubectl apply -f srcs/grafana/grafana.yaml

minikube dashboard
