<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    protected $guarded = [];
    protected $dates = ['fixture_date'];

    public function getFormattedFixtureDateAttribute() {
      return $this->fixture_date->format('jS M');
    }

    public static function getFixturesForGameWeek($id) {
      return $fixtures = Fixture::all();
    }
}
