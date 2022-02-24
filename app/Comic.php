<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'author',
        'title',
        'pubblishing_house',
        'relase_date',
        'coverImg',
        'price',
    ];
    
}
