# Laravel Bdd

**Laravel package to set up a Bdd test suite**

The package use [Behat](http://docs.behat.org/en/v3.0/), [mink](http://mink.behat.org/en/latest/), [mink-extension](https://github.com/Behat/MinkExtension) and [Behat laravel extension](https://github.com/laracasts/Behat-Laravel-Extension).

## Installation

From your laravel project, install the dependencies using composer

```
composer require simotod/laravel-bdd:^1.0
```

Register the service Provider in config/app.php

```php
    'providers' => [
        //omitted
        SimoTod\LaravelBdd\Providers\BddServiceProvider::class,
    ],
```

Publish the yml file and the tests/bdd folder

```
php artisan vendor:publish --provider="SimoTod\LaravelBdd\Providers\BddServiceProvider"
```

## Basic Usage

Write your features in tests/bdd/features using [gherkin syntax](http://docs.behat.org/en/v3.0/guides/1.gherkin.html#gherkin-syntax) and run the bdd tests

```
vendor/bin/behat
```
