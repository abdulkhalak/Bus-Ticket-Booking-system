<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookseat extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function route()
    {
        return $this->belongsTo(Route::class, 'route_id');
    }

    // public function seat()
    // {
    //     return $this->belongsTo(Seat::class);
    // }

    public function seats()
    {
        return $this->hasMany(Seat::class, 'bookseat_id');
    }
}
