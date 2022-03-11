<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title','type','series','description','image','price','sale_date'];

    //protected $guarded = ['']
}
