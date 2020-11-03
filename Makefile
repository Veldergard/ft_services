NAME = olaurine
VERSION = 42

create:
	docker-machine create olaurine
	eval $(docker-machine env olaurine)
