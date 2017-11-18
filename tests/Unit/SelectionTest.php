<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\Selection;
use App\Team;
use Carbon\Carbon;

class SelectionTest extends TestCase
{
    use DatabaseMigrations;

    public function test_can_see_formatted_fixture_date_on_a_selection()
    {
      $selection = factory(Selection::class)->make([
        'fixture_date' => Carbon::parse('2016-12-01')
      ]);
      $this->assertEquals('1st December, 2016', $selection->formatted_fixture_date);
    }

    public function test_can_see_selection_made_date_on_a_selection()
    {
      $selection = factory(Selection::class)->make([
        'selection_made_date' => Carbon::parse('2016-12-01')
      ]);
      $this->assertEquals('1st December, 2016', $selection->formatted_selection_made_date);
    }
}
