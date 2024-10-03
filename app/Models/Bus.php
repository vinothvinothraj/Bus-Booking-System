<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $fillable = ['bus_number', 'capacity', 'driver_id', 'conductor_id', 'bus_type'];

    public function driver()
    {
        return $this->belongsTo(UserInformation::class, 'driver_id');
    }

    public function conductor()
    {
        return $this->belongsTo(UserInformation::class, 'conductor_id');
    }

    public function routes()
    {
        return $this->hasMany(Route::class);
    }

    public function timeSlots()
    {
        return $this->hasMany(TimeSlot::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
