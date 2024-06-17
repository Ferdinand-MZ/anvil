<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Archive extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['letterType','archiveCategory','User'];

    public function letterType(): BelongsTo
    {
        return $this->belongsTo(LetterType::class);
    }

    public function archiveCategory(): BelongsTo
    {
        return $this->belongsTo(ArchiveCategory::class);
    }

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function getRouteKeyName()
    {
        return 'uuid';
    }

}
