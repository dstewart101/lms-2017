<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gameworld;

class GameworldController extends Controller
{
    public function show($id) {
      $gameworld = Gameworld::find($id);
      return view('gameworlds.show', compact('gameworld'));
    }
}
