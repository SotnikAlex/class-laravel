<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    
    protected $table = 'news'; //в том случае если название таблицы не соответствует названию медели (таблица - множественное число, модель единственное )
    public function category()
    {
    	return $this->belongsTO('App\Category', 'category_id');

    	//втрой параметр - указываеит название внешнего ключа, если название не модель_id 
    }

    public function setTitleAttribute($value)
    {
    	$this->attributes['title']= ucfirst($value);
    }
    public function getImgAttribute($value)
    {
    	return $value ? $value : '/img/no-img.png';
    }
}
