<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use App\Models\Banner;
use App\Models\Category;
use App\Models\News;
use App\Models\Order;
use App\Models\Part;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index(){       
        $categories = Category::get();
        $banners = Banner::orderBy('created_at', 'desc')->get();
        return view('index', compact('categories', 'banners'));
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
        $product = Product::where('id', $product)->firstOrFail();
        return view('product', compact('product'));
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
        $news = News::orderBy('created_at', 'desc')->get();
        return view('news', compact('news'));
    }
}
