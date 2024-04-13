<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $is_admin = Auth()->user()->is_admin;

        if ($is_admin == 0) {
            return view('pembeli.dashboard');
        } elseif ($is_admin == 1) {
            return view('admin.dashboard');
        } else {
            return redirect()->back();
        }
    }
}