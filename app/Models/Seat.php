<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    public function bookSeat()
    {
        return $this->belongsTo(BookSeat::class, 'bookseat_id');
    }
}
