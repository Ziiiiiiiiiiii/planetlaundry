<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\Transaction;
use App\Models\Customer;
use App\Models\Package;
use App\Models\Outlet;
use App\Models\User;

class TransactionController extends Controller
{
    public function create()
    {
        $customers = Customer::all();
        $packages = Package::all();
        $outlets = Outlet::all();
        $users = User::all();
        return view('admin.customer.createtrans', compact('customers', 'packages', 'outlets', 'users'));
    }

    public function edit($id)
    {
        $transaction = Transaction::find($id);
        $customers = Customer::all();
        $packages = Package::all();
        $outlets = Outlet::all();
        $users = User::all();
        return view('admin.customer.edittrans', compact('transaction', 'customers', 'packages', 'outlets', 'users'));
    }

    public function store(Request $request)
    {
        $transaction = Transaction::updateOrCreate(
            [
                'id' => $request->id,
                'invoice' => $request->invoice,
            ],
            [
                'invoice' => Str::random(12),
                'outlet_id' => $request->outlet_id,
                'customer_id' => $request->customer_id,
                'package_id' => $request->package_id,
                'quantity' => $request->quantity,
                'deadline' => $request->deadline,
                'paydate' => $request->paydate,
                'additional_cost' => $request->additional_cost,
                'discount' => $request->discount,
                'tax' => $request->tax,
                'total_price' => $request->total_price,
                'status' => $request->status,
                'paid_status' => $request->paid_status,
                'user_id' => $request->user_id
            ],
        );

        return redirect('customers');
    }
}