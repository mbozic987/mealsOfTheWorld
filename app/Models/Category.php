<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $with = ['category_translations'];

    protected $fillable = ['slug'];


    public function meals(): HasMany
    {
        return $this->hasMany(Meal::class);
    }


    public function categoryTranslations(): HasMany
    {
        return $this->hasMany(CategoryTranslation::class)->where('locale', '=', App::getLocale());
    }
}