# checkout a orphaned branch

git checkout --orphan newBranch
# add everything

git add -A
# commit

git commit -m "Initial Commit"
# delete master branch

git branch -D master
# rename current branch to master

git branch -m master
# force push master

git push -f origin master
# remove old files

git gc --aggressive --prune all
# force push master

git push -f origin master
