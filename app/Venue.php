<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Venue extends Model
{
    protected $fillable = ['name'];

    public function areas(): HasMany
    {
        return $this->hasMany(Area::class);
    }

    public function seatings(): MorphMany
    {
        return $this->morphMany(Seating::class, 'seatable');
    }
}
