<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Products extends Controller
{
   
   //Function for get all data

    public function index(){
        $products=Product::all();
        return $products;
    }
   
   //Function for insert Data to "Product" table.

    public function store(Request $request){
        $products= Product::create([
            'name'=> $request->name,
            'description'=> $request->description,
            'price'=> $request->price,
            'stock'=> $request->stock
        ]);

        return response()->json(['massage'=> 'Product insert successful', 'data'=> $products]);
    }

   //Function for get a single data by ID.

    public function show($id){
        $product= Product::find($id);

        if (!$product){
            return response()->json(['massage'=>'No product found by this ID. Enter a valid one.']);
        }
        return $product;
    }


    //Function for update a specified data

    public function update(Request $request, $id){
       
     $product= Product::find($id);

        if (!$product) {
        return response()->json(['message' => 'Product ID not valid.']);
        }
        
        $product->name= $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;       
        $product->save();

        return response()->json(['message' => 'Product update successful', 'data' => $product]);
    }


    // Function for delete a single data by it's ID.

    public function destroy($id){

        $product=Product::find($id);

        if(!$product){
            return response()->json(['massage'=> 'Nothing found. Please Enter a Valid ID']);
        }
        
        Product::destroy($id);

        return response()->json(['massage'=> 'Product delete successful']);
    }   

}
