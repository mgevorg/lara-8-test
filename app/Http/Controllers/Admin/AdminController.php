<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
    	//
    }

    public function index(Request $request)
    {
//    	return $request->ip();
//        return $request->url();
//        return $request->path();
//        dd($request->all());
        return response()->view('index')->cookie('name', 'value', 1500);
    }

    public function database()
    {
    	return "another shit";
    }
}
