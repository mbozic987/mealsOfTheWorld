<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\EloquentRelations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';

    protected $with = ['tag_translations'];

    protected $fillable = ['slug'];


    
    public function meals(): BelongsToMany
    {
        return $this->belongsToMany(Meal::class, 'meals_tags', 'tag_id', 'meal_id');
    }
    
    public function tagTranslations(): HasMany
    {
        return $this->hasMany(TagTranslation::class)->where('locale', '=', App::getLocale());
    }

}
