<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use App\Models\Transaction;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customer.index', compact('customers'));
    }

    public function customer($id)
    {
        $customer = Customer::find($id);
        $transaction = Transaction::where('customer_id', $id)->count();
        $transactions = Transaction::where('customer_id', $id)->latest()->get();
        $paid = Transaction::where('paid_status', 'Paid')->count();
        $notpaid = Transaction::where('paid_status', 'Not Paid')->count();
        $new = Transaction::where('status', 'New')->count();
        $process = Transaction::where('status', 'Process')->count();
        $done = Transaction::where('status', 'Done')->count();
        $accepted = Transaction::where('status', 'Accepted')->count();
        return view('admin.customer.customer', compact('customer', 'transactions', 'transaction', 'paid', 'notpaid', 'new', 'process', 'done', 'accepted'));
    }

    public function transaction($id)
    {
        $customer = Customer::find($id);
        $transactions = Transaction::where('customer_id', $id);
        return view('admin.customer.detailtransaction', compact('customer', 'transaction'));
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        $customers = Customer::all();
        return view('admin.customer.edit', compact('customer', 'customers'));
    }

    // public function store(Request $request)
    // {
    //     Customer::updateOrCreate(
    //         ['id' => $request->id],
    //         [
    //             'name' => $request->name,
    //             'sex' => $request->sex,
    //             'address' => $request->address,
    //             'phone' => $request->phone
    //         ],
    //     );

    //     return redirect('customers');
    // }

    public function store(Request $request)
    {
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->save();

        return redirect('customers');
    }

    public function update(Request $request)
    {
        $customer = Customer::find($request->id);
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->save();

        return redirect('customers');
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        $transactions = Transaction::where('customer_id', $id)->get();
        foreach ($transactions as $transaction) {
            $transaction->delete();
        }
        $customer->delete();

        return redirect('customers');
    }
}