<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cd extends Model 
{
    
     public $timestamps = false;
    
     protected $fillable = [
         'title','rate','category','quantity'
     ];
}