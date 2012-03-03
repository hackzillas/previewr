# Previewr

An open source application for gathering design feedback from clients. Built on [Laravel](http://laravel.com), an elegant PHP 5.3+ framework.

## Installation

Although the application is still under development, if you want to install it and help contribute to the app you are more than welcome!

1. Clone the repository: `git clone git@github.com:hackzillas/previewr.git`
2. Setup a database connection in the database config file. Refer to the docs for [more information](http://laravel.com/docs/database/config). You also might need to [setup the application URL](http://laravel.com/docs/install#basic-configuration) depending on how your environment is setup.
3. Setup Laravel migrations: `php artisan migrate:install`
4. Run the migrations for the application: `php artisan migrate`