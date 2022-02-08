require-composer:
	make -C tools require-composer

install: require-composer
	./tools/composer install


php-cs-fixer:
	make -C tools install; \
	tools/vendor/bin/php-cs-fixer fix src

docker-up:
	./tools/docker-compose up -d; \
	php -S localhost:8000 -t public/

docker-down:
	./tools/docker-compose down

server-up:
	php -S localhost:8000 -t public/

populate-db:
	./bin/console doctrine:migrations:migrate