.PHONY: build start stop restart php ngrok

build:
	docker-compose build

start: build
	docker-compose up --detach

stop:
	docker-compose down --remove-orphans --volumes --timeout 0

restart: stop start

php: start
	docker-compose exec php php -S 0.0.0.0:80

ngrok: start
	docker-compose exec ngrok ngrok http php:80