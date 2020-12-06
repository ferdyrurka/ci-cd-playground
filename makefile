.Phony: start
start:
		docker-compose up -d

.Phony: stop
stop:
		docker-compose down -v

.Phony: phpunit
phpunit:
		docker container exec ci_app php ./vendor/bin/phpunit

.Phony: coverage_phpunit
coverage_phpunit:
		docker container exec ci_app php ./vendor/bin/phpunit --coverage-clover build/logs/clover.xml --configuration phpunit.xml

.Phony: cs
cs:
	docker container exec ci_app php ./vendor/bin/phpcs

.Phony: infection
infection:
	docker container exec ci_app php ./vendor/bin/infection --min-covered-msi=70 --min-msi=70 -n
	docker container exec ci_app cat infection.log


