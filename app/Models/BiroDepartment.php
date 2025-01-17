<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BiroDepartment extends Model
{
    use HasFactory;

    public function event(): HasMany
    {
        return $this->hasMany(Event::class);
    }

    public function member_of_biro_department(): BelongsTo
    {
        return $this->belongsTo(MemberOfBiroDepartment::class);
    }
}
