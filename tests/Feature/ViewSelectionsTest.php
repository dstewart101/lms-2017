<?php

namespace Tests\Feature;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\Selection;
use Carbon\Carbon;

class ViewSelectionsTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function test_can_see_selections()
    {
          $selection = Selection::create([
          'user_id' => 1,
          'fixture_date' => Carbon::parse('2017-09-06'),
          'selection_made_date' => Carbon::parse('today'),
          'team_id' => '3'
        ]);

        $this->get('selections')
          ->assertSee('User')
          ->assertSee('1')
          ->assertSee('Fixture Date')
          ->assertSee('6th September, 2017');
    }
}
