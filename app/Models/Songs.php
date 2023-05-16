<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Songs extends Model
{
    use HasFactory;

    /**
     * The Instruments that belong to the Songs
     *
     */
    public function instruments(): BelongsToMany
    {
        return $this->belongsToMany(Instruments::class);
    }

    /**
     * The Genres that belong to the Songs
     *
     */
    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genres::class);
    }

    /**
     * The Moods that belong to the Songs
     *
     */
    public function moods(): BelongsToMany
    {
        return $this->belongsToMany(Moods::class);
    }


}
