<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Archive extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['archive_category'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function archive_category(): BelongsTo
    {
        return $this->belongsTo(ArchiveCategory::class);
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
