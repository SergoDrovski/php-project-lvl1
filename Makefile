install:
	composer install

brain-games:
	@./bin/brain-games

bgames: brain-games

validate:
	composer validate

linter:
	composer phpcs -- --standard=PSR12 bin

brain-even:
	@./bin/brain-even

brain-calc:
	@./bin/brain-calc

brain-gcd:
	@./bin/brain-gcd

brain-progression:
	@./bin/brain-progression
	 

	
