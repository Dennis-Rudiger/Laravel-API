This is a Laravel API that works with a CRUD Angular app

## Project Setup ##
To set up the project, I used Composer and ran the following command: composer require tymon/jwt-auth


since it implements JWT authentication, I installed the `tymon/jwt-auth` package by running the command: 
composer require tymon/jwt-auth

Generate a JWT secret key by running the command: 
php artisan jwt:secret

configured authentication guards to use JWT for API authentication by updating the config/auth.php

Created a Controller for handling authentication by using the command: PHP artisan make:controller AuthController
I added methods for registration, logging, and getting the authenticated user

I created the customer and product models and controllers 
php artisan make:model Customer -mcr
php artisan make:model Product -mcr

and defined the schema in the migration files for customers and products

The API was connected to a mysql database by configuring the .env file and updating the config

I added routes for authentication, customers, and products in routes/api.php

Finally, I implemented customer and product controllers for the create, read, update, and destroy operations in CustomerController.php and ProductController.php


Api was tested with Postman and web console

