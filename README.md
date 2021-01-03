docker container kill $(docker ps -q)
docker system prune
rm -Rf sequode.com/
git clone git@github.com:shawnlawyer/sequode.com.git
cd sequode.com/
git checkout develop
cp .env.example .env
docker-compose up -d --build
docker exec -it sequodecom_app_1 composer install
docker exec -it sequodecom_app_1 ./docker/start.sh
mkdir logs
docker exec -it sequodecom_app_1 ./docker/start.sh
history
