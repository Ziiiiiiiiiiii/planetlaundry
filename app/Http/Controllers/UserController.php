<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Outlet;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function edit($id)
    {
        $outlets = Outlet::all();
        $user = User::find($id);
        $users = User::all();
        return view('admin.user.edit', compact('outlets', 'user', 'users'));
    }

    public function store(Request $request)
    {
        User::updateOrCreate(
            ['id' => $request->id],
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'outlet_id' => $request->outlet_id,
                'role' => $request->role
            ],
        );

        return redirect('users');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('users');
    }
}