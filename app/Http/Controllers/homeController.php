<?php

namespace App\Http\Controllers;
use App\Models\bestseller;
use App\Http\Controllers\Controller;
use App\Models\newarrival;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function dashboard(){
        return view ('admin.Dashboard');
    }
    //----------------------------------------------
    public function product(){
        return view('admin.product');
    }
    //----------------------------------------------
    public function product1(){
        return view('admin.product1');
    }
    //----------------------------------------------
    public function uploadbestseller(Request $request){
        $data = new bestseller;
        $image = $request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('productimage',$imagename);
        $data->image = $imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        
        $data ->save();
        // return redirect()->back()->with('message','product added Successfully');
        return response()->json([
            'message' =>'product upload succefull',
        ],200);
    }
    //--------------------------------------------------
    public function uploadnewarrival(Request $request){
        $data1 = new newarrival;
        $image = $request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('productimage',$imagename);
        $data1->image = $imagename;

        $data1->title=$request->title;
        $data1->price=$request->price;
        $data1->description=$request->description;
        
        $data1 ->save();
        // return redirect()->back()->with('message','product added Successfully');
        return response()->json([
            'message' =>'product upload succefull',
        ],200);
    }
    // ------------------------------------------------------------------
    public function index()
    {
        $product= bestseller::all();
        $product1= newarrival::all();
        return view('welcome', compact('product', 'product1'));
    }
    

}
