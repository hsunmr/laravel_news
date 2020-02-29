<?php

namespace App\Http\Controllers;

use App\models\News;
use App\models\Category;
use Illuminate\Http\Request;
use Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {
        if(!empty($_GET['categories'])){
            $news = Category::find($_GET['categories'])->news;
        }else{
            $news = News::orderby('created_at', 'desc')->get();      
        }
        $categories = Category::all();
        return view('news.index',compact('news','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('news.create',compact('categories'));
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
            'categories' => 'required',
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
        foreach (request('categories') as $category) {
            $news->categories()->attach($category);
        }
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
        $news = News::find($id);
        //dd($news);
        return view('news.view',compact('news'));
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
