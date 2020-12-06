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
	echo "Run code sniffer"
