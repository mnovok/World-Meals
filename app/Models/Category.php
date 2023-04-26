<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $translatedAttributes = ['title', 'slug'];

    protected $fillable = ['title', 'slug'];
    protected $table = 'category';

    public function meals(){
		return $this->hasMany(Meal::class);
	}

    public function categoryTranslations()
    {
        return $this->hasMany(CategoryTranslation::class);
    }
}
