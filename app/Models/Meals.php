<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Ingredient;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meals extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Translatable;

    public $translatedAttributes = ['title', 'description'];
    protected $fillable = ['title', 'slug', 'description'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_meal');
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'meal_tag');
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredients::class, 'ingredient_meal');
    }
}
