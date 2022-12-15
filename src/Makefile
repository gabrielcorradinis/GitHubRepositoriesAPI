install:
	@docker exec -u 1000 lara_git composer install
	@docker exec lara_git php artisan key:generate

dump:
	@docker exec -u 1000 lara_git composer dumpautoload

up:
	@docker-compose -f ../docker/docker-compose.yml -p lara-git up -d

down:
	@docker-compose -f ../docker/docker-compose.yml -p lara-git down

restart:
	@docker-compose -f ../docker/docker-compose.yml -p lara-git restart

reset:
	@docker-compose -f ../docker/docker-compose.yml -p lara-git down -v
	@docker-compose -f ../docker/docker-compose.yml -p lara-git up --build -d

permissions:
	@docker exec lara_git chown -cR 1000:33 ./bootstrap/cache/ ./storage/
	@docker exec lara_git chmod -cR 775 ./bootstrap/cache/ ./storage/

clear:
	@docker exec lara_git rm ./bootstrap/cache/*.php
	@docker exec lara_git php artisan optimize:clear

migrate:
	@docker exec -t lara_git php artisan migrate:refresh --seed

php:
	@docker exec -it -u 1000 lara_git bash

admin:
	@docker exec -it lara_git bash

tinker:
	@docker exec -it lara_git bash -c "while true; do php artisan tinker; done"
