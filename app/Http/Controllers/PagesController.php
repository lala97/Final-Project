<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function istek(){
      return view('istek');
    }

    public function destek(){
      return view('destek');
    }

    public function haqqimizda(){
      return view('haqqimizda');
    }

    public function elaqe(){
      return view('elaqe');
    }
}