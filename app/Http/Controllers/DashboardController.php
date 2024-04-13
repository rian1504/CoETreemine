<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $role = Auth()->user()->is_admin;

        if ($role == 0) {
            return view('pembeli.dashboard');
        } elseif ($role == 1) {
            return view('admin.dashboard');
        } else {
            return redirect()->back();
        }
    }
}