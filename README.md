# 319_laravel

Laravel Dependencies:
Composer
PHP >= 5.4
MCrypt PHP Extension for PHP


In cmd, run these commands in the project folder:
//Should install vendor folder
composer update
composer install

//Needed
composer require predis/predis
composer require guzzlehttp/guzzle
composer update

//Should install Node Modules
npm install
npm run dev

Might also need to run if it did not download:
npm install react-router@2.8.1

For guzzehttp:
May need to uncomment php extention ext-curl * from php.ini

To Run Chat Server:
redis-server.exe
node server.js

Helpful Commands:
npm run watch - will automatically update app.js file


