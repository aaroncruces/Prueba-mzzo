# install php and complements
sudo apt -y install php &&
sudo apt -y install php-mysql &&
sudo apt -y install php-mbstring &&
sudo apt -y install php-curl &&
sudo apt -y install php-xml
 
# install mysql and workbench (optional). see on internet

# install laravel
sudo apt install composer
composer create-project laravel/laravel pokedesk
composer install
composer update
php artisan key:generate
php artisan migrate
php artisan serve

# install api rest client for php
composer require guzzlehttp/guzzle 

# activate npm for future frontend dependencies
npm init

# install helper for react scaffolding
composer require laravel/ui
php artisan ui react
npm install resolve-url-loader --save-dev
npm install && npm run dev

# install browsersync for development
npm install browser-sync browser-sync-webpack-plugin --save-dev



# For the project to work on heroku, add the Procfile
# also, generate some key, pruebamzzo is the name of the project
heroku config:set APP_KEY=base64:ZxXrGribmCMrwS1hi+hfxCQKoWHh19qCCsF82QTL5As= -a pruebamzzo