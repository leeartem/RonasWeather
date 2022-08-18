run:
	docker-compose up --build -d
stop:
	docker-compose stop 
optimize:
	docker-compose run --rm artisan optimize
test:
	docker-compose run --rm artisan test