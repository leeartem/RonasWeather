run:
	docker-compose up --build
stop:
	docker-compose stop 
optimize:
	docker-compose run --rm artisan optimize