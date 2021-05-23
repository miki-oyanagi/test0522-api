<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TweetController extends Controller
{
    public function post(Request $request){
        $param=[
            "data"=>$request->text,
        ];
        DB::table('tweets')->insert($param);
        return response()->json([
            'data'=>$param
        ],200);
    }
}
