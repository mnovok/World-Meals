<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealsTags extends Model
{
    use HasFactory;

    protected $fillable = ['meal_id', 'tag_id'];

    public function meals()
    {
        return $this->belongsToMany(Meals::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class);
    }
}
