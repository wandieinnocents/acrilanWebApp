<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontEndPagesController extends Controller
{
    
 public function profile(){
     
        return view('frontend.pages_frontend.profile.index');
    }



}
