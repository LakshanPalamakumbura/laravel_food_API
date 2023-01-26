<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserFavouritesRequest;
use App\Http\Requests\UpdateUserFavouritesRequest;
use App\Models\UserFavourites;
use Spatie\QueryBuilder\QueryBuilder;

class UserFavouritesController extends Controller
{
    public function addFav($food_id){
        $existing_fav=null;
        $existing_fav= QueryBuilder::for(UserFavourites::class)
                    ->where('food_id',$food_id)
                    ->where('user_id',auth('sanctum')->user()->id)
                    ->first();
        if($existing_fav){
            QueryBuilder::for(UserFavourites::class)
                    ->where('food_id',$food_id)
                    ->where('user_id',auth('sanctum')->user()->id)
                    ->delete();
            return response()->json('Removed',200);
        }else if($existing_fav===null){
            UserFavourites :: create([
                'user_id'=> auth('sanctum')->user()->id,
                'food_id'=>$food_id
            ]);
            return response()->json('Added',200);
        }else{
            return response()->json('Something error occured',402);
        }
    }


    public function getFav(){
    
        $favourites = Querybuilder::for(UserFavourites::class)
                    ->where('user_id',auth('sanctum')->user()->id)
                    ->with('food')
                    ->get();
                    
        return response()->json($favourites, 200);
    }

    // public function removeFav($food_id){
    //     Favourite::class::where('user_id', auth('sanctum')->user()->id)
    //     ->where('food_id', $food_id)
    //     ->delete();

    //     return response()->json([
    //         'status' => 200,
    //     ], 200);
    // }
}
