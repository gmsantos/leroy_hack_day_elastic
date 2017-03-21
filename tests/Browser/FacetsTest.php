<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class FacetsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testShouldSeeSomeOfOurFacets()
    {
        $this->browse(function ($browser) {
            $browser->visit('/')
                    ->assertSee('ELETRIC_VOLTAGE')
                    ->assertSee('LINE')
                    ->assertSee('INDICATED_USE')
                    ->assertSee('POWER')
                    ->assertSee('BRAND')
                    ->assertSee('RPM');
        });
    }

    public function testShouldRemoveEmptyFacets()
    {
        $this->browse(function ($browser) {
            $browser->visit('/')
                ->clickLink('bosch ( 4 )')
                ->assertDontSee('makita')
                ->assertQueryStringHas('brand', 'bosch');
        });
    }

    public function testShouldGoToProductPage()
    {
        $this->browse(function ($browser) {
            $browser->visit('/')
                ->clickLink('Comprar!')
                ->assertPathIs('/1');
        });
    }

    public function testShouldNotShowHiddenElements()
    {
        $this->browse(function ($browser) {
            $browser->visit('/')
                ->assertDontSee('Zizaco!');
        });
    }

    /** @group z */
    public function testShouldShowHiddenElementsWhenMouseOver()
    {
        $this->browse(function ($browser) {
            $browser->visit('/')
                ->mouseover('.menu-list li a')
                ->assertSee('Zizaco Approves!');
        });
    }

    /** @group z */
    public function testAccessAccessAnotherPage()
    {
        $this->browse(function ($browser) {
            $browser->visit('http://leroymerlin.com.br')
                ->assertSee('Produtos em destaque');
        });
    }

    public function testAddProductsToCart()
    {
        $this->browse(function ($browser) {
            $browser->visit('http://www.leroymerlin.com.br/jogo-v-line-com-41-pecas-furar-e-parafusar_89025783')
                ->clickLink('Receber em casa')
                ->assertPathIs('/carrinho')
                ->assertSee('Meu Carrinho')
                ->assertSee('Cód. do produto: 89025783');
        });
    }
}
