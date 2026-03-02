<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    public function bookingRequests()
    {
        return $this->hasMany(BookingRequest::class);
    }
}
