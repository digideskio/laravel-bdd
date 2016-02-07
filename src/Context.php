<?php
namespace SimoTod\LaravelBdd\Context;

use Behat\Behat\Context\Context as BehatContext;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;
use PHPUnit_Framework_Assert as PHPUnit;
use Laracasts\Behat\Context\Migrator;
use Laracasts\Behat\Context\DatabaseTransactions;
use Laracasts\Behat\Context\Services\MailTrap;

class Context extends MinkContext implements BehatContext, SnippetAcceptingContext
{

}
