<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
	{
		$title = 'Home Page';
		$subTitle ='<em>Users</em>';
		$users =  ['Vasya', 'Petya'];
    	// подключается фаил из папки resources/views/home/index.blade.php
		return view('home.index', compact('title', 'subTitle', 'users'));
	}
	public function contacts()
	{
		$title = 'Contacts Page';
		// подключается фаил из папки resources/views/home/contacts.blade.php
		return view('home.contacts', compact('title'));
	}
	public function getContacts(Request $request)
	{
		// dd($request); - выводит на экран данные и останавливает выполнение дальнейшего кода 
		// данные формы находятся в объекте $request как свойства
		$name = $request->name;
		$name = $request->message;
		// отправляем почту
		return redirect('/');
	}
	public function product($id)
	{
		return $id;
	}
	public function productReview($id, $id_review)
	{
		return $id . ':' . $id_review;
	}
}
