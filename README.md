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

For guzzehttp:
May need to uncomment php extention "extension=php_curl.dll" from php.ini on line 893

//Should install Node Modules
npm install
npm run dev

Might also need to run if it did not download:
npm install react-router@2.8.1


To Run Chat Server:
redis-server.exe
node server.js

Helpful Commands:
npm run watch - will automatically update app.js file


