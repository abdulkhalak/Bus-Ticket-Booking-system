<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function bookSeats()
    {
        return $this->hasMany(BookSeat::class, 'route_id');
    }
}
