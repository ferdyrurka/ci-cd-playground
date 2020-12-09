.Phony: start
start:
		docker-compose up -d

.Phony: stop
stop:
		docker-compose down -v

.Phony: phpunit
phpunit:
		docker container exec ci_app php ./vendor/bin/phpunit

.Phony: cs
cs:
	docker container exec ci_app php ./vendor/bin/phpcs

.Phony: infection
infection:
	docker container exec ci_app php ./vendor/bin/infection --min-covered-msi=70 --min-msi=70 -n
	docker container exec ci_app cat infection.log

.Phony: phpstan
phpstan:
	docker container exec ci_app php ./vendor/bin/phpstan analyse -l 7 src tests

.Phony: phpmd
phpmd:
	docker container exec ci_app php ./vendor/bin/phpmd src,tests text phpmd.xml --suffixes php
