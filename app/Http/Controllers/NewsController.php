<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\News;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news =  News::all();
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $news = new News();

        return view('news.create', compact('categories', 'news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|min:3|max:255',
            'content'=>'required|min:3',
            'category'=>'required',
            'img'=>'mimes:jpeg,jpg,png,gif|max:2000'
        ]);

        $news = new News();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->category_id = $request->category;
        
         $file = $request->file('img');
         if($file){ 
        $fileName = $file->getClientOriginalName();
        $file->move(public_path() . '/img', $fileName);

        $news->img='/img/' . $fileName;
        }
        $news->save();
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
        $news = News::find($id);
        $categories = Category::all();
        $category = Category::find($id);
        
        return view('news.edit', compact('news','categories', 'category'));
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
         $request->validate([
            'title'=>'required|min:3|max:255',
            'content'=>'required|min:3',
            'category'=>'required',
            'img'=>'mimes:jpeg,jpg,png,gif|max:2000'
        ]);

        $news = News::find($id);
        $news->title = $request->title;
        $news->content = $request->content;
        $news->category_id = $request->category;

         if($request->removeImg){
            $news->img = null;
        }
        
        $file = $request->file('img');
        if($file){
        $fileName = $file->getClientOriginalName();
        $file->move(public_path() . '/img', $fileName);
        $news->img='/img/' . $fileName;
        }




        $news->save();
        return redirect('/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id); 
        $news->delete();
        return redirect('/news');
    }
}
