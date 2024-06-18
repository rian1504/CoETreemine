<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $is_admin = Auth()->user()->is_admin;

            if ($is_admin == 0) {
                return view('buyer.index');
            } elseif ($is_admin == 1) {
                return redirect()->route('admin');
            } else {
                return redirect()->back();
            }
        } else {
            return view('buyer.index');
        }
    }
}