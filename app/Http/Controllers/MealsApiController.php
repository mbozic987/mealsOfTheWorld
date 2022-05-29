<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealsApiController extends Controller
{
    public function index(Request $request, Meal $meal)
    {
        return 'Hello';   
    }
}
