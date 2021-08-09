
all: delete install run

install:
	@ sudo sh ./srcs/start.sh
	
stop:
	@ cd ./srcs && docker-compose down; 

prune: stop
	@ cd ./srcs && docker system prune -a; 

delete: prune
	@ sudo rm -Rf ~/data/;

run: 
	@ cd ./srcs && docker-compose up -d --build ; 

.PHONY: install stop prune delete run all 