<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
    	//
    }

    public function another()
    {
        return "another";
    }


    public function index(Request $request)
    {
    	return "qaq";
    }

    public function database(Request $request)
    {
    	return "another shit";
    }
}
