analyse:
	php ./vendor/bin/phpstan analyse --memory-limit=256m

test:
	php ./vendor/bin/pest

coverage:
	php ./vendor/bin/pest --coverage


