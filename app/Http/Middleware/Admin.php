<?php

namespace App\Http\Middleware;

use App\Models\Buyer\CartCustom;
use App\Models\Buyer\Order;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $role = Auth()->user()->is_admin;
        if ($role == 1) {
            $dataReviewFile = CartCustom::where('status', 'not review')->get()->count();
            $dataReviewPayment = Order::where('status', 'not review')->get()->count();
            $dataOnProgress = Order::where('status', 'on progress')->get()->count();

            View::share('dataSidebar', [
                "dataReviewFile" => $dataReviewFile,
                "dataReviewPayment" => $dataReviewPayment,
                "dataOnProgress" => $dataOnProgress,
            ]);
            return $next($request);
        }
        abort(401);
    }
}