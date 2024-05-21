<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    use HasFactory;

    protected $table = 'chefs';

    public function bmenus()
    {
        return $this->hasMany(Bmenu::class);
    }

    public function cmenus()
    {
        return $this->hasMany(Cmenu::class);
    }
}