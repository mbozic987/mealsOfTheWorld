<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\EloquentRelations\BelongsTo;

class TagTranslation extends Model
{
    use HasFactory;

    protected $table = 'tags_translations';

    protected $fillable = ['title'];


    public function tags(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }
}
