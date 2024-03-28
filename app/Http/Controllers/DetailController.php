<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    function detail()
    {
        return view("detail_portofolio");
    }
}
