<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){

    	$request->session()->flash('Prince','Task was Successfull');
    	return view('home');
    }
}
