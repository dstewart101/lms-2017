<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selection extends Model
{
    protected $guarded = [];
    protected $dates = ['selection_made_date', 'fixture_date'];

    public function getFormattedFixtureDateAttribute() {
      return $this->fixture_date->format('jS F, Y');
    }

    public function getFormattedSelectionMadeDateAttribute() {
      return $this->selection_made_date->format('jS F, Y');
    }

    public function team() {
      return $this->hasOne('App\Team', 'id', 'team_id');
    }
}
