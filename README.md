## Essay App

This is a Laravel + VueJs application (Using InertiaJs) that helps students get professional help from qualified writers.

## Prequisities

The things you need before installing the project

* PHP 8+

* [Composer](https://getcomposer.org) 

* [Xampp](https://apachefriends.org/download.html)

## Installation

* Run `composer install` on your cmd or terminal to install composer and make sure you have php installed in your system.

* Navigate on the cmd, the folder path you want to store this project in and type the following code

```bash
#  clone this repository
$ git clone https://github.com/codejutsu1/essay-website
```

* Open the project and create a file, `.env` on the root folder.

* Copy everything in `.env.example` and paste in the `.env` file.

* Open your `.env` file and change your database name (DB_DATABASE) from laravel to any name you want.

* By default, the username is root and you can leave the password empty. (For Xampp)

* Then run the following code 

```bash
# To generate app key
$ php artisan key:generate

# To migrate the database
$ php artisan migrate 

# To seed data to the database 
$ php artisan db:seed

# To run the project on a server
$ php artisan serve
# It will run on localhost:8000 or 127.0.0.1:8000 on your web browser.
```

## Login Details

Each login details (a single login page) will redirect you to their respective dashboard.

### Admin

```bash
Email: admin@admin.com
Password: admin@admin
```

### Writer

```bash
Email: writer@writer.com
Password: writer@writer
```

### User

```bash
Email: user@user.com
Password: user@user
```

## Functionalities of each role

### Admin

*  Assign orders paid by the user to any writer.

* Able to suspend or delete a writer or a user.

* Monitor the orders: new orders, confirmed orders, pending orders and rejected orders from the writer.

* View each User, writer and order details.

* View each transaction made for each order.

* Can make changes to the website through settings.

### Writer

* View a table of received orders and have the option to either accept or decline.

* View orders details and have a field to upload a new file which automatically sets the order status to complete.

* Able to view orders (pdf or docx) before accepting or declining the order.

## User 

* Able to place an order either writing on a specific topic or editing an already written topic by uploading the file.

* View orders and their processes

* Able to view payment history.

* When order is completed, he can view and download the new file uploaded by the writer.

## About the project

* Responsive in all devices.

* Make an online payment using [Paystack](https://paystack.com) for
    - a page writeup for a fixed price by the admin.

* Send out emails (mailables).

* Can view both pdf or docx on the website.

* Beautiful design inspiration from [Edusson](https://edusson.com)

* Wrote test for the following
    - Each role's authentication
    - Each role's pages in the dashboard

```bash
# To test the application
$ php artisan test
```