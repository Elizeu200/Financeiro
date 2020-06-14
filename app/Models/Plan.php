<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class plan extends Model
{
    protected $fillable = ['name','url','price','description'];
}
