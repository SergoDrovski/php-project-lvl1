install:
	composer install

brain-games:
	@./bin/brain-games

bgames: brain-games

validate:
	composer validate

linter:
	composer phpcs -- --standard=PSR12 bin


	
