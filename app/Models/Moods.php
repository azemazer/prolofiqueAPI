<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Moods extends Model
{
    use HasFactory;

    public function songs(): BelongsToMany
    {
        return $this->belongsToMany(Songs::class);
    }
}
