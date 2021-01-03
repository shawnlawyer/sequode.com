## Run project locally

####Run Master Branch
```
#clone repository
git clone git@github.com:shawnlawyer/sequode.com.git

#change to repository directory
cd sequode.com/

#make mysql_data directory
mkdir mysql_data

#make copy of .env.example for docker-compose to use
cp .env.example .env

#build containers
docker-compose up -d --build

#install php dependencies
docker exec -it sequodecom_app_1 composer install

#open localhost
open http://sequode.localhost

```

####Run Develop Branch
```

#clone repository
git clone git@github.com:shawnlawyer/sequode.com.git

#change to repository directory
cd sequode.com/

#checkout development branch
git checkout development

#make mysql_data directory
mkdir mysql_data

#make copy of .env.example for docker-compose to use
cp .env.example .env

#build containers
docker-compose up -d --build

#install php dependencies
docker exec -it sequodecom_app_1 composer install

#open localhost
open http://sequode.localhost


```

Import SQL from sequode.dump

####Run Container Localhost Cleanup
```
# stop running all containers
docker container kill $(docker ps -q)

# prune all docker images
echo "y" | docker system prune

# delete project directory
rm -Rf sequode.com/

```

###Caution; Do Not Run This!

####Delete repository history

```

# checkout orphan branch
git checkout --orphan orphanBranch

# add everything
git add -A

# commit
git commit -m "Initial Commit"

# delete master branch
git branch -D main

# rename current branch to main
git branch -m main

# force push master
git push -f origin main

# remove old files
git gc --aggressive --prune all

# force push master
git push -f origin main


```
