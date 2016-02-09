# Laravel Bdd

**Laravel package to set up a Bdd test suite**

This package uses [Behat](http://docs.behat.org/en/v3.0/), [mink](http://mink.behat.org/en/latest/), [mink-extension](https://github.com/Behat/MinkExtension) and [Behat laravel extension](https://github.com/laracasts/Behat-Laravel-Extension).

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

## Basic definition
This package ship with a set of pre build definition you can use to write your test.

Opens homepage.
```
Given I am on the homepage
When I go to the homepage
```

Opens specified page.
```
Given I am on "<page>"
When I go to "<page>"
```
Where <page> is the url of the page

Reloads current page.
```
When I reload the page
```

Moves backward one page in history.
```
When I move backward one page
```

Moves forward one page in history
```
When I move forward one page
```

Presses button with specified id|name.
```
When I press "<button>"
```
Where <button> is the id|name.

Clicks link with specified id.
```
When I follow "<link>"
```
Where <link> is the id.

Fills in form field with specified id|name.
```
When I fill in "<field>" with "<value>"
When I fill in "<value>" for "<field>"
```
Where <field> is the id|name and <value> is the value to fill in.

Selects option in select field with specified id|name.
```
When I select "<option>" from "<select>"
```
Where <select> is the id|name and <option> is the value to select.

Selects additional option in select field with specified id|name for multiselect.
```
When I additionally select "<option>" from "<select>"
```
Where <select> is the id|name and <option> is the value to select.

Checks checkbox with specified id|name.
```
When I check "<checkbox>"
```
Where <checkbox> is the id|name.

Unchecks checkbox with specified id|name.
```
When I uncheck "<checkbox>"
```
Where <checkbox> is the id|name.

Attaches file to field with specified id|name.
```
When I attach the file "<path>" to "<field>"
```
Where <field> is the id|name and <path> is the path of the file.

Checks that current page PATH is equal to specified.
```
Then I should be on "<page>"
```
Where <page> is the url of the page

Checks that current page PATH is equal to '/'.
```
Then I should be on the homepage
```

Checks that current page PATH matches regular expression.
```
Then the url should match <pattern>
```
Where <page> is the url of the page and <pattern> is the regular expression.

Checks that current page response status is equal to specified.
```
Then the response status code should be <code>
```
Where <code> is the response status.

Checks that current page response status is not equal to specified.
```
Then the response status code should not be <code>
```
Where <code> is the response status.

Checks that page contains specified text.
```
Then I should see "<text>"
```
Where <text> is the text to match.

Checks that page doesn't contain specified text.
```
Then I should not see "<text>"
```
Where <text> is the text to match.

Checks that page contains text matching specified pattern.
```
Then I should see text matching <pattern>
```
Where <pattern> is the regular expression.

Checks that page doesn't contain text matching specified pattern.
```
Then I should not see text matching <pattern>
```
Where <pattern> is the regular expression.

Checks that HTML response contains specified string.
```
Then the response should contain "<text>"
```
Where <text> is the string to match.

Checks that HTML response doesn't contains specified string.
```
Then the response should not contain "<text>"
```
Where <text> is the string to match.

Checks that element with specified CSS contains specified text.
```
Then I should see "<text>" in the "<element>"
```
Where <text> is the text to match and <element> is a CSS selector.

Checks, that element with specified CSS doesn't contains specified text.
```
Then I should not see "<text>" in the "<element>"
```
Where <text> is the text to match and <element> is a CSS selector.

Checks that element with specified CSS contains specified HTML.
```
Then the "<element>" element should contain "<value>"
```
Where <value> is the string to match and <element> is a CSS selector.

Checks that element with specified CSS doesn't contain specified HTML.
```
Then the "<element>" element should not contain "<value>"
```
Where <value> is the string to match and <element> is a CSS selector.

Checks that element with specified CSS exists on page.
```
Then I should see an "<element>" element
```
Where <element> is a CSS selector.

Checks that element with specified CSS doesn't exist on page.
```
Then I should not see an "<element>" element
```
Where <element> is a CSS selector.

Checks that form field with specified id|name has specified value.
```
Then the "<field>" field should contain "<value>"
```
Where <field> is the id|name and <value> is the value.

Checks that form field with specified id|name doesn't have specified value.
```
Then the "<field>" field should not contain "<value>"
```
Where <field> is the id|name and <value> is the value.

Checks that checkbox with specified in|name is checked.
```
Then the "<checkbox>" checkbox should be checked
```
Where <checkbox> is the id|name.

Checks that checkbox with specified in|name is unchecked.
```
Then the "<checkbox>" checkbox should not be checked
```
Where <checkbox> is the id|name.

Checks, that <num> CSS elements exist on the page
```
Then I should see <num> "<element>" elements
```
Where <element> is a CSS selector and <num> is an integer.

Prints current URL to console.
```
Then print current URL
```

Prints last response to console.
```
Then print last response
```

Opens last response content in browser.
```
Then show last response
```

## Migration
To run a migration before avery test, copy .env in .env.behat, change the credentials and add
```
use Migrator;
```
as a trait in tests/bdd/context/FeatureContext.php

## PHPUnit
The object
```
PHPUnit
```
is available in tests/bdd/context/FeatureContext.php to write assertion in the custom function.





