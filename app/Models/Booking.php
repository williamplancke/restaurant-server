<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasUuids;
    function Restaurant(): BelongsTo {
        return $this->belongsTo(Restaurant::class);
    }
    protected $fillable = ['name', 'email', 'datetime', 'people', 'restaurant_id'];
}
