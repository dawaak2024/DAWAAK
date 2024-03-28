<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bestseller;
use App\Models\newarrival;
class dataController extends Controller
{
    public function showbestseller()
    {
        $product= bestseller::all();
        
        return response()->json([
            'message'=> 'show data successfully',
            'data'=> $product
        ],200);
    } 
    // ---------------------------------------
    public function shownewarrival()
    {
        $product1= newarrival::all();
        
        return response()->json([
            'message'=> 'show data successfully',
            'data'=> $product1
        ],200);
    }
}
