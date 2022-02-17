<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Outlet;
use App\Models\Package;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $outlet = Outlet::count();
        $user = User::count();
        $customer = Customer::count();
        $package = Package::count();
        $transaction = Transaction::count();

        return view('home', compact('outlet', 'user', 'customer', 'package', 'transaction'));
    }
}