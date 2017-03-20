<?php
namespace Tests\Behavior\Search;

use Behat\Behat\Context\Context as BehatContext;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Tester\Exception\PendingException;
use Tests\Behavior\RawContext;

class Context extends RawContext implements BehatContext, SnippetAcceptingContext
{
    /**
     * @When I search for :term
     */
    public function iSearchFor($term)
    {
        $this->getSession()->getPage()->fillField('name', $term);
    }

    /**
     * @Then I should see :count :brand drills
     */
    public function iShouldSeeDrillsList($count, $brand)
    {
        $this->assertSession()->elementTextContains(
            'css',
            '.content',
            $brand
        );
    }
}
