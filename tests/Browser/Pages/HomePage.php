<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;

class HomePage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @return void
     */
    public function assert(Browser $browser)
    {
        $this->assertHeader($browser);
        $this->assertSearchBar($browser);
        $this->assertSideBar($browser);
    }

    /**
     * Assert that page logo are visible.
     *
     * @return void
     */
    public function assertHeader(Browser $browser)
    {
        $browser->assertSee('DDrills');
        $browser->assertSee('The home of your holes');
    }

    /**
     * Assert that page logo are visible.
     *
     * @return void
     */
    public function assertSearchBar(Browser $browser)
    {
        $elements = $this->elements();

        $browser->assertVisible($elements['@searchBox']);
        $browser->assertVisible($elements['@searchButton']);
    }

    /**
     * Assert that page logo are visible.
     *
     * @return void
     */
    public function assertSideBar(Browser $browser)
    {
        $browser->assertSee('ELETRIC_VOLTAGE');
        $browser->assertSee('LINE');
        $browser->assertSee('INDICATED_USE');
        $browser->assertSee('POWER');
        $browser->assertSee('BRAND');
        $browser->assertSee('RPM');
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@searchBox' => 'input[name=name]',
            '@searchButton' => 'input[type=submit][value=Search]',
        ];
    }
}
