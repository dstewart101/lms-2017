<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Selection;

class SelectionController extends Controller
{
    public function index() {
      $selections = Selection::All();
      return view('selections.index', compact('selections'));
    }
}
