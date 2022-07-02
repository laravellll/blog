<?php

namespace App\Http\Controllers;

use App\Models\LatestBlog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function blogpage(){
     $blog=LatestBlog::all();
       return view('frontend.main',['key'=>$blog]);
   }

   public function orderpage(){
    return view('frontend.order');
}


   
  
   

}
