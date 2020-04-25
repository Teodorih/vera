<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticleRequest;
use App\Paint;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaintsController extends Controller
{
    public function index()
    {
        $paints = Paint::all();
        return view('paints.index', compact('paints'));
    }
    public function show($id){
        $paint = Paint::findorfail($id);
        return view('paints.open', compact('paint'));

    }
    public function create(){
        return view('paints.create');
    }
    public function store(Request $request){
        //if request is standart laravel then we can use: $this->>validate($request, ['title' => 'required'])

       // $input = Request::all();ц
        $this->validate($request, ['title' => 'required', 'published_at'=>'required', 'url'=>'image']);
        $input = $request->all();
        $imagename = $input['title']. '.' . $input['url']->getClientOriginalExtension();
        $input['url']->move(base_path().'/public/images/catalog/', $imagename);
        Paint::create($input);
        return redirect('paints');
    }
}
