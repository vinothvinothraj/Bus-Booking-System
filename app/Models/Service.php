<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price_per_seat'];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function routes()
    {
        return $this->hasMany(Route::class);
    }
}
