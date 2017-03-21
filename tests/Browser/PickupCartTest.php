<?php
namespace Tests\Browser;

use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PickupCartTest extends DuskTestCase
{
    /** @group b */
    public function testPickupIsAvailableWhenClickOnInvite()
    {
        $this->browse(function ($browser) {
            $browser->visit('http://develop.leroymerlin.com.br/institucional/convite-clique-e-retire-v2')
                ->assertSee('Clique e Retire: Teste para Colaboradores')
                ->clicklink('Comece a comprar agora!')
                ->assertSee('Produtos em Destaque');
        });
    }

    /** @group b */
    public function testCartWithPickupItemsShouldReceiveOnlyPickupItems()
    {
        $this->browse(function ($browser) {
            $browser->visit('http://develop.leroymerlin.com.br/purificador-sem-refrigeracao-branco-bica-movel-bem-estar-consul_89014191')
                ->press('Retirar na loja')
                ->waitFor('.modal-show')
                ->assertSee('Ricardo Jafet')
                ->assertSee('Retirar aqui');
        });
    }
}
