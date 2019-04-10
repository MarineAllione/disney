<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class filmsController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function index()
 {
     $films=DB::table('films')->get();
     return view('films')->with('films',$films);
 }
}
