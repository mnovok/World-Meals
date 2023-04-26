<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    public $translatedAttributes = ['title', 'slug'];

    protected $fillable = ['title', 'slug'];

    public function meals()
    {
        return $this->belongsTo(Meals::class);
    }
}
