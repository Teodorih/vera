<?php

namespace App\Http\Controllers;

use App\Paint;
use Carbon\Carbon;
use Request;

class PaintsController extends Controller
{
    public function index()
    {
        $paints = Paint::all();
        return view('paints.index', compact('paints'));
    }
    public function open($id){
        $paint = Paint::findorfail($id);
        return view('paints.open', compact('paint'));

    }
    public function create(){
        return view('paints.create');
    }
    public function store(){
        $input = Request::all();
        Paint::create($input);
        return redirect('paints');
    }
}
