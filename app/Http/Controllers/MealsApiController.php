<?php

namespace App\Http\Controllers;

use App\Models\MealApi;
use Illuminate\Http\Request;

class MealsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Hello there';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MealApi  $mealApi
     * @return \Illuminate\Http\Response
     */
    public function show(MealApi $mealApi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MealApi  $mealApi
     * @return \Illuminate\Http\Response
     */
    public function edit(MealApi $mealApi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MealApi  $mealApi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MealApi $mealApi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MealApi  $mealApi
     * @return \Illuminate\Http\Response
     */
    public function destroy(MealApi $mealApi)
    {
        //
    }
}
