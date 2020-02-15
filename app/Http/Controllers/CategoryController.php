<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category; //подключили модель

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // отображение всех категорий используется метод GET

        $categories = Category::all();
        //dd($categories);   
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // форма добавления категории метод GET
        return view('category.create');
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
        'title' => 'required|max:100|min:3'
        ]);
        //обработка формы создания
        $category = new Category();
        // В модели все столбцы таблицы записываются в свойства 
        $category->name = $request->title;
        $category->save();

        return redirect('/category')->with('success', 'Category with id ' . $category->id . ' added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //отображение данных категории
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // форма редактирования каттегории
        $category = Category::find($id);
        return view('category.edit', compact('category'));
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
        //обработка формы редактирования
        $request->validate([
        'title' => 'required|max:100|min:3'
        ]);

        $category = Category::find($id); 
        $category->name = $request->title;
        $category->save();

        return redirect('/category')->with('success', 'Category with id ' . $category->id . ' updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //удаление категории
        $category = Category::find($id); 
        $category->delete();

        return redirect('/category')->with('success', 'Category with id ' . $category->id . ' Delete!');
    }
}
