<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($slug){
        $page = Page::get($slug)->first();
        return $this->render($page,$slug);
    }
    public function render($page,$slug){
        return view('frontend.page',['page'=>$page,'slug'=>$slug]);
    }
}
