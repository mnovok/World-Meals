<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    use HasFactory;

    public $translatedAttributes = ['title', 'slug'];

    protected $fillable = ['title', 'slug'];

    public function meals()
    {
        return $this->belongsToMany(Meals::class);
    }

    public function ingredientTranslation()
    {
        return $this->hasMany(IngredientTranslation::class);
    }
}
