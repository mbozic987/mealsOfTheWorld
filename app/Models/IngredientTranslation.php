<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IngredientTranslation extends Model
{
    use HasFactory;

    protected $table = 'ingredient_translations';

    protected $fillable = ['title'];
    
    public function ingredients(): BelongsTo
    {
        return $this->belongsTo(Ingredient::class);
    }
}
