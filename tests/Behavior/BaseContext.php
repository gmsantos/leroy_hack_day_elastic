<?php
namespace Tests\Behavior;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Base feature context to test behaviors
 */
class BaseContext extends MinkContext implements
    Context,
    SnippetAcceptingContext
{
    /**
     * @Then I should see DDrills logo
     */
    public function iShouldSeeDDrillsLogo()
    {
        $this->assertPageContainsText('DDrills');
        $this->assertPageContainsText('The home of your holes');
    }

    /**
     * @Then I should see the search bar
     */
    public function iShouldSeeTheSearchBar()
    {
        $this->assertElementOnPage('input[name=name]');
        $this->assertElementOnPage('input[type=submit][value=Search]');
    }

    /**
     * @Then I should see the sidebar
     */
    public function iShouldSeeTheSidebar()
    {
        $this->assertPageContainsText('Eletric_Voltage');
        $this->assertPageContainsText('Line');
        $this->assertPageContainsText('Indicated_Use');
        $this->assertPageContainsText('Power');
        $this->assertPageContainsText('Brand');
        $this->assertPageContainsText('RPM');
    }
}
