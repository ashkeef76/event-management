<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function attendees():HasMany
    {

        return $this->hasMany(Attendee::class);
    }
    public function venue() :BelongsTo
    {
        return $this->belongsTo(Venue::class);

    }
    public function Organizer():BelongsTo
    {
        return $this->belongsTo(Organizer::class);
    }
}
