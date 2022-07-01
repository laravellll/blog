<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function blogpage(){
       return view('frontend.main');
   }

   public function orderpage(){
    return view('frontend.order');
}


   
  
   

}
