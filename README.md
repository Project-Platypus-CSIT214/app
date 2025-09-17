# app - Project 2

# Build instructions

* [XAMMP](https://www.apachefriends.org/) or something similar for web server
* [Composer](https://getcomposer.org/)  (When installing composer, make sure you click the "Add this PHP to your path")
* [NodeJS](https://nodejs.org/en)

## Pre steps
Once XAMPP is installed, go to `C:\xampp\php\php.ini`
and search for `;extension=intl`.

Uncomment that line by removing the ";" in front. 
Do the same thing for `;extension=zip` (should be slightly below intl)

## Main steps
1. Download repo and open in Visual Studio Code
2. Go to "Terminal" and enter:
`npm install`

4. Then:
`composer update`

5. Then:
`ren .env.example .env`

6. In the .env file, uncomment the DB lines below it.

7. Then:
`php artisan key:generate`

(Make sure xampp apache and mysql services is running before)

8. Then go to `http://localhost/phpmyadmin/index.php` and create a new database called "platypus".

9. Go to the import tab and import "platypus.sql"

10. Open up a new terminal tab and type `npm run dev` and open up another one and type `php artisan serve`

Website will be at http://127.0.0.1:8000
