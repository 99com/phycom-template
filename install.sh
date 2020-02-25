#!/bin/sh

#docker-compose run --rm cli composer update --prefer-dist

docker-compose run --rm php composer install

docker-compose up -d

docker-compose run --rm php echo "All" | php init --env=development
docker-compose run --rm php sh docker/postgres/is-db-ready.sh "db" "php yii migrate --interactive=0"
docker-compose run --rm php sh docker/postgres/is-db-ready.sh "db" "php yii application/init"
