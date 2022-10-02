#!bin/sh

AUCTION=microservice_auction
AUTH=microservice_authentication

make_migrations:
	docker exec -it ${AUCTION} php bin/console doctrine:migrations:migrate || true
	docker exec -it ${AUTH} php bin/console doctrine:migrations:migrate || true

supervisord:
	docker exec -it ${AUCTION} supervisord || true
	docker exec -it ${AUTH} supervisord || true