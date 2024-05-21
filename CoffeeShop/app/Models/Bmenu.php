<?php

namespace App;

use Illuminate\Database\Eloquent\Model; // Add this use statement


class Bmenu extends Model
{
    protected $table = 'Bmenus';
    public function chef()
    {
        return $this->belongsTo(Chef::class);
    }
}