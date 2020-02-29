<?php

namespace App\Http\Controllers;

use App\models\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$news_id)
    {
       
        request()->validate([
            'body' => 'required',
        ]);
        comment::create([
            'news_id' => $news_id,
            'body'=>request('body'),        
        ]);
        session()->flash('success', 'comment was successfully created!');
        return back();
    }
}
