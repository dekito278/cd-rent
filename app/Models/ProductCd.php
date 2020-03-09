<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_cd extends Model 
{
    
     public $timestamps = false;
    
     protected $fillable = [
         'title','rate','category','quantity'
     ];
}
