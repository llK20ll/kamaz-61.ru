<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    // public function getCategory()
    // {
    //     return Category::where('id', $this->category_id)->first();
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPriceForCount()
    {
        $cur_price = $this->price;
        if(isset($this->new_price)){
            $cur_price = $this->new_price;
        }

        if(!is_null($this->pivot)){
            return $this->pivot->count * $cur_price;
        }
        return $cur_price;
    }
}
