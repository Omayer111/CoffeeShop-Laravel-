<?php

namespace App;

use Illuminate\Database\Eloquent\Model; // Add this use statement


class Chef extends Model
{
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