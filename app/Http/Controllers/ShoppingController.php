<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    function shopping(){
        return view("shopping_view");
    }
}
