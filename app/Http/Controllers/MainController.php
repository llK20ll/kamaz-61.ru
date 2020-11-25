<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use App\Models\Category;
use App\Models\Order;
use App\Models\Part;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index(){       
        $categories = Category::get();

        return view('index', compact('categories'));
    }

    public function categories(){
        $categories = Category::get();
        return view('categories', compact('categories'));
    }    

    public function category($code){
        
        $categories = Category::get();
        $category = Category::where('code', $code)->first();
        $products = Product::where('category_id', '=', $category->id)->orderBy('price')->paginate(9); 
        return view('category', compact('categories','category', 'products'));
    }

    public function product($category, $product = null){
        $cat = Category::where('id', $category)->first();
        $item = Product::where('id', $product)->firstOrFail();
        return view('product', compact('item', 'cat'));
    }


    public function leasing(){
        return view('leasing');
    }

    public function parts(){       
        return view('parts');
    }

    public function partsview($parts_code = null){  
        
        $parts = Part::where('parts_code', $parts_code)->first();
     
        return view('partsview', compact('parts'));
    }
    
    public function service(){
        return view('service');
    }

    public function contacts(){
        return view('contacts');
    }

    public function privacy(){
        return view('privacy');
    }
    public function news(){
        return view('news');
    }
    
}
