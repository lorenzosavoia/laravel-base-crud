<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    protected $fillable = [
        'author',
        'title',
        'pubblishing_house',
        'relase_date',
        'coverImg',
        'price',
    ];
    public $timestamp =false;
}
