<?php

namespace App\Http\Controllers;

use App\models\News;
use Illuminate\Http\Request;
use Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();

        return view('news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        request()->validate([
            'title' => 'required',
            'content' => 'required',
            'image'=>['required','image'],
        ]);
        if (!file_exists('uploads/news')) {
            mkdir('uploads/news', 0755, true);
        }
        $file = $request->file('image');

        $path = public_path() . '/uploads/news/';
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        Image::make($file)->crop(300,200)->save($path . $fileName);

        $news = News::create([
            'title' => request('title'),
            'image'=>$fileName,
            'content' => request('content'),
            'user_id' => auth()->user()->id
            
        ]);
        session()->flash('success', 'News was successfully created!');
        return redirect('/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
