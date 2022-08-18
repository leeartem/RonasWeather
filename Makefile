run:
	docker-compose up --build -d && docker-compose run --rm composer i
stop:
	docker-compose stop 
optimize:
	docker-compose run --rm artisan optimize
test:
	docker-compose run --rm artisan test