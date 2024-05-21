<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; // Add this use statement
use App\Models\Chef;

class Cmenu extends Model
{
    use HasFactory;
    protected $table = 'cmenus';
    public function chef()
    {
        return $this->belongsTo(Chef::class);
    }
}