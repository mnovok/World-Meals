<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealsTranslation extends Model
{
    use HasFactory;
    protected $guared = [];
    public $timestamps = false;
    protected $table = 'meals_translation';
    
    public function meal()
    {
         return $this->belongsTo(Meals::class);
    } 
}
