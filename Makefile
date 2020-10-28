NAME = olaurine
VERSION = 42

all:
	@echo "хочу какать"

build:
	docker build -t $(NAME):$(VERSION) srcs/

run:
	docker run --name $(NAME) -it $(NAME):$(VERSION)

create:
	docker-machine create olaurine
	eval $(docker-machine env olaurine)
