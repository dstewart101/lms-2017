<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\Gameworld;
use Carbon\Carbon;

class GameworldTest extends TestCase
{

    public function setUp() {
      parent::setUp();
      $this->gameworld = factory('App\Gameworld')->make([
        'start_date' => Carbon::parse('2016-12-01')
      ]);
    }

    public function test_can_see_formatted_date()
    {
      $this->assertEquals('1st December, 2016', $this->gameworld->formatted_date);
    }

    public function test_should_be_gameweek_1_before_game_starts() {
      $this->gameworld->start_date = Carbon::tomorrow();
      $this->assertEquals('1', $this->gameworld->calculateGameWeek());
    }

    public function test_should_be_gameweek_1_on_day_game_starts() {
      $this->gameworld->start_date = Carbon::now();
      $this->assertEquals('1', $this->gameworld->calculateGameWeek());
    }

    public function test_should_be_gameweek_1_on_day_after_game_starts() {
      $this->gameworld->start_date = Carbon::now()->subDay();
      $this->assertEquals('1', $this->gameworld->calculateGameWeek());
    }

    public function test_should_be_gameweek_1_three_days_after_game_starts() {
      $this->gameworld->start_date = Carbon::now()->subDay(3);
      $this->assertEquals('1', $this->gameworld->calculateGameWeek());
    }

    public function test_should_be_gameweek_2_four_days_after_game_starts() {
      $this->gameworld->start_date = Carbon::now()->subDay(4);
      $this->assertEquals('2', $this->gameworld->calculateGameWeek());
    }

    public function test_should_be_gameweek_3_eleven_days_after_game_starts() {
      $this->gameworld->start_date = Carbon::now()->subDay(11);
      $this->assertEquals('3', $this->gameworld->calculateGameWeek());
    }
}
