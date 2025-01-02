<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  public function hello(){
    $displayString = 'てすと Hello World Laravel on Docker';
    return view('hello', compact('displayString'));
  }
}