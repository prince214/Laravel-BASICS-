<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request){
    	print_r($request->url());
    	print_r($request->method());

    	if($request->isMethod="get"){
    		echo "Get Method";
    	}
    	else
    	{
    		echo "Post Method";
    	}
    }
}
