cd /opts
sudo rm -Rf *
mkdir checkout
mkdir includes
mkdir classes
mkdir nginx
cd /opts/nginx/
mkdir html

cd /opts/checkout
git clone git@github.com:/shawnlawyer/3rdParty.git
cd 3rdParty/
git checkout master
#git checkout development
sudo cp -r www/. /opts/nginx/html/
sudo cp -r includes/. /opts/includes/
sudo cp -r classes/. /opts/classes/

cd /opts/checkout
git clone git@github.com:/shawnlawyer/Sequode.git
cd Sequode/
#git checkout master
git checkout development
sudo cp -r www/. /opts/nginx/html/
sudo cp -r includes/. /opts/includes/
sudo cp -r src/. /opts/includes/src/Sequode/

CLASSES_LIST=('Application' 'ApplicationProfiles' 'Authorities' 'Components' 'Database' 'DatabaseModels' 'Email' 'Modelers' 'Server' 'ServerModules' )

MODULES_LIST=('Account' 'Auth' 'Authed' 'BlacklistIP' 'Console' 'Token' 'Package' 'Sequode' 'Session' 'Site' 'User' 'Register')

for m in ${CLASSES_LIST[@]}; do
    sudo cp -r classes/$m/. /opts/classes/
done

for m in ${MODULES_LIST[@]}; do
    sudo cp -r classes/Modules/$m/. /opts/classes/
done

sudo chown -R www-data:www-data /opts/nginx/html
sudo chown -R www-data:www-data /opts/includes
sudo chown -R www-data:www-data /opts/classes

cd /opts/checkout
sudo rm -Rf *
cd /opts/nginx/html
export DEPLOYED="\n\n\n*********************\nProduction  Branches Deployed\n*********************\n"
export TAILERRORLOG="Tails Error Log\n#tail -50 /var/log/nginx/error.log\n"
export TAILACCESSLOG="Tails Error Log\n#tail -50 /var/log/nginx/access.log\n"
#clear
echo -e ${DEPLOYED}
date
echo -e ${TAILERRORLOG}
echo -e ${TAILACCESSLOG}
