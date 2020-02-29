<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories',compact('categories'));
    }
    public function store(Request $request){
        request()->validate([
            'name' => 'required',
        ]);
        Category::create([
            'name' => request('name'),   
        ]);
        session()->flash('success', 'Category was successfully created!');
        return back();
    }
}
