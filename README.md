## Prerequisites

-   PHP >=7.3
-   MySQL (servion >5)
-   Composer

## After pulling

-   Folder `vendor` is ignored by Git. Therefore, after pulling the code, please run:
    > composer install
-   Then `composer` will recreate a `vendor` folder in your repository

## Migrate database and create data seeds

-   First of all, copy `.env.example` to your `.env` and make sure the name of DB and authentication are correct
-   Migrate with the following command:
    > php artisan migrate
-   If you already had your own database, please do:
    > php artisan migrate:refresh --seed
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
            -   ...
    -   Models
        -   Admin.php
        -   Counselor.php
        -   Patient.php
        -   ...
-   config
    -   auth.php
-   database
    -   migrations
        -   (all migation files)
    -   seeders
        -   (add data seeds)
-   routes
    -   api.php
-   .env

**API samples will be mentioned in `api.php`**
