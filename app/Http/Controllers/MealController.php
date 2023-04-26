<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\MealResourceCollection;
use App\Models\Meals;
use Illuminate\Support\Facades\DB;

class MealController extends Controller
{
    public function show()
    {
        $data = Meals::all();
        return view ('list', ['meals' => $data]);
    }
}
