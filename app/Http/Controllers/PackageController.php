<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\PackageCategory;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        $pcategories = PackageCategory::all();
        return view('admin.package.index', compact('packages', 'pcategories'));
    }

    public function edit($id)
    {
        $package = Package::find($id);
        $packages = Package::all();
        $pcategories = PackageCategory::all();
        return view('admin.package.edit', compact('package', 'packages', 'pcategories'));
    }

    public function store(Request $request)
    {
        Package::updateOrCreate(
            ['id' => $request->id],
            [
                'package_name' => $request->package_name,
                'package_category_id' => $request->package_category_id,
                'description' => $request->description,
            ],
        );

        return redirect('packages');
    }

    public function delete($id)
    {
        $package = Package::find($id);
        $package->delete();
        return redirect('packages');
    }
}