## Playground-API ##

Build with [Laravel](https://laravel.com/).
### Installation ###

* `composer install`
* `php artisan key:generate`
* Create a database and create a custom *.env* containing the configuration
* `php artisan migrate --seed` to create and populate tables
* Inform *config/mail.php* for email sends
* `php artisan serve` to start the app on http://localhost:8000/