<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function getDataAdmin()
    {
        // $dataCategory = Category::all()::count();
    }

    public function index()
    {
        $is_admin = Auth()->user()->is_admin;

        if ($is_admin == 0) {
            return view('pembeli.dashboard');
        } elseif ($is_admin == 1) {
            $data = $this->getDataAdmin();

            return view('admin.dashboard')->with('data');
        } else {
            return redirect()->back();
        }
    }
}