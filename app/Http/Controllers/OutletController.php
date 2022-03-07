<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Outlet;
use App\Models\User;

class OutletController extends Controller
{
    public function index()
    {
        $outlets = Outlet::all();
        return view('admin.outlet.index', compact('outlets'));
    }

    public function outlet($id)
    {
        $outlet = Outlet::find($id);
        $users = User::where('outlet_id', $id)->get();

        return view('admin.outlet.outlet', compact('outlet', 'users'));
    }

    public function edit($id)
    {
        $outlet = Outlet::find($id);
        $outlets = Outlet::all();
        return view('admin.outlet.edit', compact('outlet', 'outlets'));
    }

    // public function store(Request $request)
    // {
    //     Outlet::updateOrCreate(
    //         ['id' => $request->id],
    //         [
    //             'name' => $request->name,
    //             'address' => $request->address,
    //             'phone' => $request->phone
    //         ],
    //     );

    //     return redirect('outlets');
    // }

    public function store(Request $request)
    {
        $outlet = new Outlet;
        $outlet->name = $request->name;
        $outlet->address = $request->address;
        $outlet->phone = $request->phone;
        $outlet->save();

        return redirect('outlets');
    }

    public function update(Request $request, $id)
    {
        $outlet = Outlet::find($id);
        $outlet->name = $request->name;
        $outlet->address = $request->address;
        $outlet->phone = $request->phone;
        $outlet->save();

        return redirect('outlets');
    }

    public function delete($id)
    {
        $outlet = Outlet::find($id);
        $outlet->delete();

        return redirect('outlets');
    }
}