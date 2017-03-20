<?php
namespace Tests\Behavior;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Tester\Exception\PendingException;

class SearchContext implements Context, SnippetAcceptingContext
{
    /**
     * @When I search for :term
     */
    public function iSearchFor($term)
    {
        throw new PendingException();
    }
}
