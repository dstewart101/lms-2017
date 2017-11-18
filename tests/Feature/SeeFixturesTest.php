<?php

namespace Tests\Feature;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\Fixture;
use Carbon\Carbon;

class SeeFixturesTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function test_can_see_fixtures_when_no_game_week_specified()
    {
      $fixture = factory('App\Fixture')->create([
        'fixture_date' => Carbon::parse('2016-12-01')
      ]);

      $this->get('fixtures/')
        ->assertSee('All Fixtures')
        ->assertSee('1st Dec');
    }
}
