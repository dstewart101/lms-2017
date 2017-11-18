<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use Carbon\Carbon;

class Gameworld extends Model
{
    protected $guarded = [];
    protected $dates = ['start_date'];

    public function getFormattedDateAttribute() {
      return $this->start_date->format('jS F, Y');
    }

    public function calculateGameWeek() {
        $now = Carbon::now();
        $daysDifference = $now->diffInDays($this->start_date);
        if ($daysDifference <= 3) {$gameWeek = 1; }
        if ($daysDifference > 3) {
          $gameWeek = ceil($daysDifference / 7) + 1;
        }
      return $gameWeek;
    }
}
