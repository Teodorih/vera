<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index(){
        return view('pages.paints');
    }
    public function about(){
        $name = "jeffty";
        return view('pages.about') -> with ([
            'name' => 'Jeffry',
            'lastname' => 'Smith'
        ]);
    }
}
