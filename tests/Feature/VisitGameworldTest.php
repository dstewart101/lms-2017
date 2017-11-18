<?php

namespace Tests\Feature;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\Gameworld;
use Carbon\Carbon;

class VisitGameworldTest extends DuskTestCase
{

    use DatabaseMigrations;

    public function test_can_visit_gameworld()
    {
        $gameworld = Gameworld::create([
          'name' => 'LMS Main Game',
          'start_date' => Carbon::parse('September 6th, 2017'),
          'league' => 'Premier League',
        ]);

        $this->get('gameworld/'.$gameworld->id)
              ->assertSee('LMS Main Game')
              ->assertSee('6th September, 2017')
              ->assertSee('Premier League');
    }  
}
