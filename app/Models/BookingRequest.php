<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingRequest extends Model
{
    public function packages()
    {
        return $this->belongsTo(package::class);
    }
}
