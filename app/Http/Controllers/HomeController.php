<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\News;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = News::orderBy('created_at','desc')->limit(2)->get();
        return view('welcome',compact('news'));
    }
}
