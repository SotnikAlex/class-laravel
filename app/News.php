<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    
    protected $table = 'news'; //в том случае если название таблицы не соответствует названию медели (таблица - множественное число, модель единственное )
}
