<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;


class TestController extends Controller
{
    public function index() { 
        
        return view('test/register'); }
}
