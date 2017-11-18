<?php

namespace Tests\Feature;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\Fixture;
use Carbon\Carbon;

class SeeFixturesTestForAGivenWeekTest extends DuskTestCase
{
    use DatabaseMigrations;





    public function test_can_see_fixtures_for_week_1()
    {

      $gameworld = factory('App\Gameworld')->create([
        'start_date' => Carbon::parse('2016-12-01')
      ]);

      $fixture1 = factory('App\Fixture')->create([
        'fixture_date' => Carbon::parse('2016-12-01')
      ]);

      $fixture2 = factory('App\Fixture')->create([
        'fixture_date' => Carbon::parse('2016-12-02')
      ]);

      $fixture3 = factory('App\Fixture')->create([
        'fixture_date' => Carbon::parse('2016-12-09')
      ]);

      $fixture4 = factory('App\Fixture')->create([
        'fixture_date' => Carbon::parse('2016-12-15')
      ]);

      $fixture5 = factory('App\Fixture')->create([
        'fixture_date' => Carbon::parse('2016-12-24')
      ]);

      $fixtures = Fixture::getFixturesForGameWeek(1);
      dd($fixtures);
      $this->assertTrue($fixtures->contains('fixture_date', '2016-12-01'));
    }
}
