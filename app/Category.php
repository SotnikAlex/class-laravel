<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false; // в таблице мы не используем колонки created_at и updated_at(в миграционном ваиле удалили метод $table-timestamps())

 	public function news()
 	{
 		return $this->hasMany('App\News');
 	}
}
