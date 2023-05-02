<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\MealResourceCollection;
use App\Models\Meals;
use Illuminate\Support\Facades\DB;

class MealController extends Controller
{
    public function index()
    {
        return view('meals');
    }

    public function show()
    {
        $data = Meals::all();
        return view ('list', ['meals' => $data]);
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $meals = Meals::where('title', 'LIKE', '%'.$search_text.'%')->with('category')->get();

        return view('meals.search', compact('meals'));
    }


    public function getMeals()
    {
        $allMeals = Meals::orderby('id', 'asc')->DB::select('*')->get();

        $response['data'] = $allMeals;

        return response()->json($response);
    }
    
    public function getMealsByCategory(Request $request)
    {
        $meal_category = $request->category;

        $allMeals = Meals::select('*')->where('category', $meal_category)->get();

        $response['data'] = $allMeals;

        return response()->json($response);
    }
}
