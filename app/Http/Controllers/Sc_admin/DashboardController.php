<?php

namespace App\Http\Controllers\Sc_admin;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
//models
use App\Models\Menu;
use App\Models\Orders;
use App\Models\Customers;

use DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $menu = new Menu();
        $orders = new Orders();
        $customers =  new Customers();
        $role_id = auth()->user()->role_id;
        if ($role_id == 1) {

            return view('auth-admin.pages.dashboard');
        }
        if ($role_id == 2) {

            return view('auth-admin.pages.restaurant-manager',[
              'count_menu'=>$menu->countMenu(),
              'count_orders'=>$orders->countOrders(),
              'count_customers'=>$customers->countCustomers(),
              'trending_menu'=>$menu->getTrendingMenu_ids(),
            ]);
        }
        if ($role_id == 3) {

            return view('auth-admin.pages.store-manager');
        }
        abort(404);
    }

    public function adminView()
    {
        return view('auth-admin.admin-view');
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
}
