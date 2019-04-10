<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jeuxController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function index()
 {
     $films=DB::table('jeux')->get();
     return view('jeux')->with('jeux',$jeux);
 }
}
