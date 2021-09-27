## Prerequisites

-   PHP >=7.3
-   MySQL (servion >5)
-   Composer

## Migrate database

-   First of all, copy `.env.example` to your `.env`
-   Migrate with the following command:
    > php artisan migrate
    > If you already have your own database, please do:
    > php artisan migrate:refresh
-   You also need to re-install your php passport
    > php artisan passport:install

## API folder structures

-   app
    -   Http
        -   Controllers
            -   Controller.php
            -   AdminController.php
            -   CounserlorController.php
            -   PatientController.php
    -   Models
        -   Admin.php
        -   Counselor.php
        -   Patient.php
-   config
    -   auth.php
-   database
    -   migrations
        -   (all migation files)
    -   seeders
        -   DatabaseSeeder.php
-   routes
    -   api.php
-   .env
(API samples be mentioned in `api.php`)
