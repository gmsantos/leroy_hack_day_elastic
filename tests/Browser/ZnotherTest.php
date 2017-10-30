<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

/**
 * Created only for the purpose of testing if a cookie
 * set in a preview test is used here.
 */
class ZnotherTest extends DuskTestCase
{
    public function testCartShouldBeEmptyOnEveryNewAccess()
    {
        $this->browse(function ($browser) {
            $browser->visit('http://www.leroymerlin.com.br/carrinho')
                ->assertSee('Meu Carrinho')
                ->assertSee(';-(');
        });
    }
}
