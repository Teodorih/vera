<?php

namespace App\Http\Controllers;

use App\Paint;
use Illuminate\Http\Request;

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
}
