<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Meal extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'meals';

    Protected $with = 'meal_translations';

    protected $fillable = ['slug'];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'meals_tags', 'meal_id', 'tag_id');
    }

    public function ingredients(): BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class, 'ingredients_meals', 'meal_id', 'ingredient_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function meals_translations(): HasMany
    {
        return $this->hasMany(MealTranslation::class)->where('locale', '=', App::getLocale());
    }

}
