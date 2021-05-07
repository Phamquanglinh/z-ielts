<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $lists = Category::get();
        return $this->render($lists);
    }
    public function render($lists){
        return view('frontend.course',['data'=>$lists]);
    }
}
