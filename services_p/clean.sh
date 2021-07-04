#!/bin/bash

set -x

kubectl delete -f srcs/mysql/mysql.yaml
kubectl delete -f srcs/phpmyadmin/phpmyadmin.yaml
kubectl delete -f srcs/wordpress/wordpress.yaml
kubectl delete -f srcs/nginx/nginx.yaml
kubectl delete -f srcs/ftps/ftps.yaml
kubectl delete -f srcs/influxdb/influxdb.yaml
kubectl delete -f srcs/grafana/grafana.yaml

eval $(minikube docker-env)
docker image rm -f mysql
docker image rm -f phpmyadmin
docker image rm -f wordpress
docker image rm -f nginx
docker image rm -f ftps
docker image rm -f influxdb
docker image rm -f grafana
eval $(minikube docker-env --unset)

minikube delete
