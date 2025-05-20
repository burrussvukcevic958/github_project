<?php
// Initialize the Composer classloader
if (!defined('PHPUnit_MAIN_METHOD')) {
    require_once 'vendor/autoload.php';
}
require 'composer/composer.phar';

// Run the composer command to install dependencies
composer install --no-interaction

// Run the command to start the application
php artisan serve
