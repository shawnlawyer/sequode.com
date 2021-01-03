## Run project locally

####Run Master Branch
```
git clone git@github.com:shawnlawyer/sequode.com.git
cd sequode.com/
mkdir mysql_data
cp .env.example .env
docker-compose up -d --build
docker exec -it sequodecom_app_1 composer install

```

####Run Develop Branch
```
git clone git@github.com:shawnlawyer/sequode.com.git
cd sequode.com/
git checkout develop
mkdir mysql_data
cp .env.example .env
docker-compose up -d --build
docker exec -it sequodecom_app_1 composer install

```

####Run Container Localhost Cleanup
```
docker container kill $(docker ps -q)
echo "y" | docker system prune
rm -Rf sequode.com/

```
