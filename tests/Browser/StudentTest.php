<?php

namespace Tests\Browser;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class StudentTest extends DuskTestCase
{
    public function test_can_register_new_student()
    {
        $this->browse(function (Browser $browser) {
            $browser->LoginAs(User::find(1))
                    ->visit('/students/create')
                    ->type('name', "John Reginald")
                    ->select('status', "active")
                    ->select('gender', "male")
                    ->type('address', "San Chaung")
                    ->type('phone', "09794303891")
                    ->press('Register')
                    ->assertSee('Student Information');
        });
    }
}
