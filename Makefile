install:
	composer install

update:
	composer dump-autoload

lint:
	composer run-script phpcs -- --standard=PSR12 src bin