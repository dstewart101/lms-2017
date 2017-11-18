<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\Fixture;
use Carbon\Carbon;

class FixtureTest extends TestCase
{
    use DatabaseMigrations;

    public function test_can_see_formatted_fixture_date_on_a_fixture()
    {
      $fixture = factory(Fixture::class)->make([
        'fixture_date' => Carbon::parse('2016-12-01')
      ]);
      $this->assertEquals('1st Dec', $fixture->formatted_fixture_date);
    }
}
