<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
  public function index()
  {
    return view('Pages.Wilayah.index');
  }
}
