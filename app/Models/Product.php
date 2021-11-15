<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    // Product will have one Subject Matter Expert
    public function sujectMatterExpert() {
        return $this->hasOne('App\Models\SubjectMatterExpert');
    }

    // Function to fetch all popular products for home page
    public function fetchPopularProducts() {
        $products = $this::inRandomOrder()->limit(6)->get();
        return $products;
    }

    // Function to fetch all products
    public function fetchAllProducts() {
        $products = $this::simplePaginate(20);
        return $products;
    }

    // Function to fetch individual product detail
    public function fetchProduct($isbn)
    {   
        $product = $this::where('isbn13',$isbn)->first();
        // if product not found then return Null
        if(empty($product)){
            return Null;
        }
        return $product;
    }
}
