<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Area extends Model
{
    protected $fillable = ['name'];

    public function venue(): BelongsTo
    {
        return $this->belongsTo(Venue::class);
    }

    public function seatings(): MorphMany
    {
        return $this->morphMany(Seating::class, 'seatable');
    }
}
