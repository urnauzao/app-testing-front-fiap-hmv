<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{

    public $appRoute = "http://localhost:3000";
    public function testeHomePage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit($this->appRoute)->assertSee('Connect HMV');
        });
    }

    public function testeLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit($this->appRoute)
            ->press('Quero me registrar!')
            ->assertSee('Digite um e-mail:');
        });
    }

    public function testMobileAcesso(){
        $this->browse(function (Browser $browser) {
            $browser->visit($this->appRoute)
            ->resize(390, 844)
            ->assertSee('Connect HMV');
        });
    }
}
