<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Placement extends Model
{
    use HasFactory;

    public function appartments(): BelongsToMany
    {
        return $this->belongsToMany(Appartment::class);
    }
    public function photos(): BelongsToMany
    {
        return $this->belongsToMany(Photo::class);
    }
}
