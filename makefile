.Phony: start
run_tests:
		docker-compose up -d

.Phony: stop
run_tests:
		docker-compose down -v

.Phony: phpunit
run_tests:
		docker container exec ci_app php ./vendor/bin/phpunit

.Phony: cs
cs:
	echo "Run code sniffer"
