## LaravelAdminPanel

A simple admin panel implementation for Laravel.

## Installation

Install the package through [Composer](http://getcomposer.org/). 

Run the Composer require command from the Terminal:

    composer require saw/admin_panel

Laravel 5.x

After updating composer, add the ServiceProvider to the providers array in config/app.php

    SAW\AdminPanel\AdminPanelServiceProvider::class

First publish the views and assets files so you can modify it to your needs:

    php artisan vendor:publish
  
