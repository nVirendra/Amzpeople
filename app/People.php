<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    //
    protected $fillable = [
        'name', 'phone', 'hobbies', 'age', 'about', 'image'
       ];
}
