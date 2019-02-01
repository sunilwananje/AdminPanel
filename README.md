# AdminPanel

Require this package in your composer.json and update composer.

composer require saw/admin_panel
Installation
Laravel 5.x
After updating composer, add the ServiceProvider to the providers array in config/app.php

SAW\\AdminPanel\\AdminPanelServiceProvider

First publish the views and assets files so you can modify it to your needs:

php artisan vendor:publish 
