NAME = k8nginx
IMAGE = nginx:kuber

.PHONY: build run exec

build:
	docker build -t $(IMAGE) .

run:
	docker run -p 80:80 -p 443:443 --name $(NAME) -d $(IMAGE)

exec:
	docker exec -it $(NAME) sh

rm:
	docker stop $(NAME)
	docker rm $(NAME)
	docker rmi $(IMAGE)
