# eBook Learning & Mentorship With Packt APIs

### Problem Statment

- Build a page that allows a user to browse through the titles from Packt APIs.
- Obtain the meta data for all titles from API at https://api.packt.com/


## Getting started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

Here's a basic setup:

* Apache2
* PHP 7 - All the code has been tested against PHP 7.4
* Laravel 7
* Mysql (5.x), running locally
* Composer 2.x

* The module is written in the [Laravel 7.2](https://laravel.com/), and 
uses the [Blade](https://laravel.com/docs/8.x/blade) templating system.

 
### Installing

1. Clone the repository:
    ```shell script
    git clone https://github.com/armashfankar/ebook-learning-with-packt.git

    ```

2. Install the requirements for the repository using the `composer`:
   ```shell script
    cd ebook-learning-with-packt/
    composer install
    
    ```

3. Copy `.env.example` to create `.env` file:
    ```shell script
    cp .env.example .env
    
    ```

4. Configure Database & Packt API endpoints in `.env` file:
    
    1. Database
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=ebooks
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    
    2. Packt API
    ```    
    PACKT_API="https://api.packt.com/api/v1/"
    PACKT_TOKEN="ke6R0uacojTXXXXXXXXXXXXX"
    ```

5. Create MySQL Database:
     ```shell script
    mysql -u root -p
    create database ebooks;
    
    ```

6. Generate key for `.env` file:
    ```shell script
    php artisan key:generate
    
    ```

7. Migrate database:
    ```shell script
    php artisan migrate
    ```

8. Seed Database:
    ```shell script
    php artisan db:seed
    ```
    Above command will seed following tables:
    1. Product (from Packt) - Packt APIs will be used to seed Product table.
    
    2. Subject Matter Expert - Subject Matter Expert table will get seeded with 5 entires which are
    mentioned in the "SubjectMatterExpertSeeder.php" file.

    1. User - User table will get seeded with one default user "John Doe"


### Login Credentials:
    Email: dev@example.com
    Password: asdasdasd

    