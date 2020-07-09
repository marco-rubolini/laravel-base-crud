<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['number', 'first_name', 'last_name', 'email'];
}
