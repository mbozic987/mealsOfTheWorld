<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Ingredient extends Model
{
    use HasFactory;

    protected $table = 'ingredients';

    protected $with = ['ingredient_translations'];

    protected $fillable = ['slug'];


    public function meals(): BelongsToMany
    {
        return $this->belongsToMany(Meal::class, 'ingredients_meals', 'ingredient_id', 'meal_id');
    }


    public function ingredientTranslations(): HasMany
    {
        return $this->hasMany(IngredientTranslation::class)->where('locale', '=', App::getLocale());
    }
}
