<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Advertisement;

class MenuController extends Controller
{
    public function menu()
    {
     
         
       return view('index');
    }
}
