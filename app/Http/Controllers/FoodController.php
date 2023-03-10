<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorefoodRequest;
use App\Http\Requests\UpdatefoodRequest;
use App\Models\food;
use Spatie\QueryBuilder\QueryBuilder;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods= QueryBuilder::for(Food::class)
            ->get();
        return response()->json($foods, 200);
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
     * @param  \App\Http\Requests\StorefoodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefoodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function show($food_id)
    {
        $food = QueryBuilder::for(Food::class)
             ->where('id', $food_id)
             ->firstOrFail();

         return new DataResource($food);//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(food $food)
    {
        //
    }

    // public function show($id)
    // {
    //     $recipe = QueryBuilder::for(FoodRecipe::class)
    //         ->where('id', $id)
    //         ->firstOrFail();

    //     return new DataResource($recipe);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefoodRequest  $request
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefoodRequest $request, food $food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(food $food)
    {
        //
    }
}
