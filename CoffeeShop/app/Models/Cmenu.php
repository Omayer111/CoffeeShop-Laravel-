<?php

namespace App;

use Illuminate\Database\Eloquent\Model; // Add this use statement

class Cmenu extends Model
{
    protected $table = 'cmenus';
    public function chef()
    {
        return $this->belongsTo(Chef::class);
    }
}