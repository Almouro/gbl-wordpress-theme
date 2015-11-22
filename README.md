# Wordpress Theme for the new GBL website (http://wp-gbl.gbu.fr/)

## Installation

See http://vccw.cc/ to install local Wordpress environment with Vagrant.
```
npm install
```

Then run
```
npm start
```
Your stylus will automatically be compiled into CSS every time you change a file.

## Deployment
```
scp -r ../gbl-wordpress-theme amoureaux@gbu.fr:~/gbl-wordpress-theme
```

Then install it on the server:
```
ssh amoureaux@gbu.fr
cd /space/squeeze/home/gbu-clone/wp-gbl/wp-content/themes && rm -rf gbl-wordpress-theme && mv ~/gbl-wordpress-theme .
```

## To Do:
* [ ] Deploy with Capistrano / Shipit / ...
* [x] Create gulpfile
