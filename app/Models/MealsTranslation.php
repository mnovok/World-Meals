<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealsTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'meals_translation';
    protected $primaryKey = 'id';
    
    public function meal()
    {
         return $this->belongsTo(Meals::class);
    } 
}
