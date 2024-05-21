<?php

namespace App\Models;

use App\Models\Chef;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; // Add this use statement

 // Add this use statement

 class Bmenu extends Model
 {
     use HasFactory;
 
     protected $table = 'bmenus';
 
     public function chef()
     {
         return $this->belongsTo(Chef::class);
     }
 }