<?php
namespace Tests\Behavior\Search;

use Behat\Behat\Context\Context as BehatContext;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Tester\Exception\PendingException;

class Context implements BehatContext, SnippetAcceptingContext
{
    /**
     * @When I search for :term
     */
    public function iSearchFor($term)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see :count :brand drills
     */
    public function iShouldSeeDrillsList($count, $brand)
    {
        throw new PendingException();
    }
}
