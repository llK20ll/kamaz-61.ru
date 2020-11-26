<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $s = $request->s;
        $categories = Category::get();;
        $products = Product::where('model', 'LIKE', "%{$s}%")->orderBy('price')->get();
        
        // dd($category);
        return view('searchresult', compact('categories','products'));
    }
}
