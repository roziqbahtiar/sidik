git add -u
git add .
git commit -m "$1"
git push -u origin master
envoy run pull
