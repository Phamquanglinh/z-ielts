<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($slug){
        $lists = Category::get();
        $mainProduct = Product::where('slug','=',$slug)->first();
        return $this->render($lists,$mainProduct);
    }
    public function render($list,$product){
        return view('frontend.detail',['categories'=>$list,'mainProduct'=>$product]);
    }
}
