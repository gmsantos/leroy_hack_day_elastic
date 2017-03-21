<?php
namespace Tests\Behavior\Home;

use Behat\Behat\Context\Context as BehatContext;
use Behat\Behat\Context\SnippetAcceptingContext;
use Tests\Behavior\RawContext;

/**
 * Base feature context to test behaviors
 */
class Context extends RawContext implements BehatContext, SnippetAcceptingContext
{
    /**
     * @Then I should see DDrills logo
     */
    public function iShouldSeeDDrillsLogo()
    {
        $this->assertSession()->pageTextContains('DDrills');
        $this->assertSession()->pageTextContains('The home of your holes');
    }

    /**
     * @Then I should see the search bar
     */
    public function iShouldSeeTheSearchBar()
    {
        $this->assertSession()->elementExists(
            'css',
            'input[name=name]'
        );
        $this->assertSession()->elementExists(
            'css',
            'input[type=submit][value=Search]'
        );
    }

    /**
     * @Then I should see the sidebar
     */
    public function iShouldSeeTheSidebar()
    {
        $this->assertSession()->pageTextContains('Eletric_Voltage');
        $this->assertSession()->pageTextContains('Line');
        $this->assertSession()->pageTextContains('Indicated_Use');
        $this->assertSession()->pageTextContains('Power');
        $this->assertSession()->pageTextContains('Brand');
        $this->assertSession()->pageTextContains('RPM');
    }
}
