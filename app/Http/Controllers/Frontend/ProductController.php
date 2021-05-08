<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $lists = Category::get();
        $teacher = Teacher::get();
        return $this->render($lists,$teacher);
    }
    public function render($lists,$teacher){
        return view('frontend.course',['data'=>$lists,'teachers'=>$teacher]);
    }
}
