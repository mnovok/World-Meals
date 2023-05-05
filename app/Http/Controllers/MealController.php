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
        $meals = Meals::all()->toArray();
        return view('list', compact('meals'));
    }

    public function show()
    {
        $meals = Meals::all();
        return view ('list', ['meals' => $meals]);
    }

    public function search(Request $request)
    {
      if($request->isMethod('post'))
      {
        $name = $request->get('name');
        $meals = Meals::where('title', 'LIKE', '%'. $name . '%')->paginate(5); 
      } 

      return view('list', compact('meals'));
    }


    public function getMeals()
    {
        $allMeals = Meals::orderby('id', 'asc')->select('*')->get();

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
