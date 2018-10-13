# Container Management System
DDAC assignment project


### Requirements

* PHP >= 7.0
* Composer


### Setup

- Clone the project and create a copy of the .env.example to .env   
 `cp .env.example .env`
 
- Install Composer dependencies
 `composer install`

- Generate a key  
 `php artisan key:generate`
 
- Update the Database credentials of the project by editing the .env file

- Migrate the database to create the tables
  `php artisan migrate`
  
- Thats it!

### Author
Ismail Zahee Zahid
