# Wordpress Theme for the new GBL website (http://wp-gbl.gbu.fr/)

See http://vccw.cc/ to install local Wordpress environment with Vagrant.

Install dependencies:
```
npm install
```

Compile styles:
```
stylus < main.styl > style.css --include node_modules/nib/lib --include-css
```

Deploy:
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
* [ ] Create gulpfile
