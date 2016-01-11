# Wordpress Theme for the new GBL website (http://gbl.gbu.fr/)

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

Check that your stylus has been compiled, then run

To deploy to http://wp-gbl.gbu.fr
```
npm run deploy:wp
```

To deploy to http://clone-gbl.gbu.fr
```
npm run deploy:clone
```

To deploy to http://gbl.gbu.fr
```
npm run deploy:prod
```

## To Do:
* [x] Full deploy script
* [x] Create gulpfile
