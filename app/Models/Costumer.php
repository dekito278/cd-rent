<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Costumer extends Model 
{
   
     public $timestamps = false;
    
     protected $fillable = [
        'name','phone','address'
     ];
}