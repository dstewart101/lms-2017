<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fixture;

class FixtureController extends Controller
{
    public function index() {
      $fixtures = Fixture::All();
      return view('fixtures.index', compact('fixtures'));
    }

    public function show($id) {
      $fixtures = Fixture::getFixturesForGameWeek($id);
      return view('fixtures.index', compact('fixtures'));
    }
}
