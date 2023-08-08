<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    public function par(): Attribute
    {
        return Attribute::get(fn() => $this->holes->sum('par'));
    }

    public function holes(): HasMany
    {
        return $this->hasMany(Hole::class);
    }
}
