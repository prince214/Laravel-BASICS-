<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    public function List(){
    	$languages = ['Java','Python','C++'];
        return view('welcome',['lang'=>$languages]);
    }

    public function index(Request $request){

    	$request->validate([
    		'username'=>'required | email',
    		'pass'=>'required | min:4 | max:6'
    	]);
    	// print_r($request->input());


    	$request->session()->put('Data',$request->input());

    	$output = $request->session()->get('Data');


    	// $request->session()->put('user',$request->username);

    	// $output = $request->session()->get('user');

    	if($output['username']=='prince@gmail.com'){
    		echo "Session present";
    		return view('home');
    	}
    	else
    	{
    		echo "Session not present";
    		return view('register');
    	}
    }
}
