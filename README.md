# Laravel Bdd

**Laravel package to set up a Bdd test suite**

The package use [Behat](http://docs.behat.org/en/v3.0/), [mink](http://mink.behat.org/en/latest/), [mink-extension](https://github.com/Behat/MinkExtension) and [Behat laravel extension](https://github.com/laracasts/Behat-Laravel-Extension).

## Installation

From your laravel project, install the dependencies using composer

```
~~composer require simotod/laravl-bdd:^1.0 --dev~~
```
**Note**
The version of Mink combatible with Symfony 3 is still in development, so we need to force Laravel to download the 2.0 version of the Simfony libraries. Instead of requiring the libraries, add the dipendency in the composer.json.

```
"require-dev": {
    //omitted
    "simotod/laravel-bdd": "~1.0"
},

```
and run
```
composer update
```

Register the service Provider. This package is for development only so in the register method of the AppServiceProvider add

```php
if (!$this->app->environment('production')) {
    $this->app->register('SimoTod\LaravelBdd\Providers\BddServiceProvider');
}
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