<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //
    public function index()
    {
        $packages = Package::all();
        return view('Backend.package.index', compact('packages'));
    }
    public function toggleStatus($id)
    {
        $package = Package::findOrFail($id);
        $package->status = !$package->status; // Toggle status
        $package->save();

        return redirect()->route('package.index')->with('success', 'Category status updated successfully.');
    }

    public function create()
    {
        $categories = Category::all();
        // dd($categories);
        return view('Backend.package.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'status' => 'nullable|boolean',
            'description' => 'nullable|string',
            'price' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'trip_duration' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/Packages'), $imageName);
        }
        $package = new Package();
        $package->name = $request->name;
        $package->status = $request->status;
        $package->description = $request->description;
        $package->price = $request->price;
        $package->start_date = $request->start_date;
        $package->end_date = $request->end_date;
        $package->trip_duration = $request->trip_duration;
        $package->image = $imageName;
        $package->save();
        // TO RETURN TO ANOTHER PAGE AFTER INSERTING WITH SUCESS MESSAGE
        return redirect()->route('package.index')
            ->with('success', 'package' . "\t" . $package->name . "\t" . 'created sucessfully');
    }



    public function edit($id)
    {
        $package_data = Package::where('id', $id)->first();
        return view('Backend.package.edit', compact('package_data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'status' => 'nullable|boolean',
            'description' => 'nullable|string',
            'price' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'trip_duration' => 'required|integer',
        ]);
        $package = Package::findOrFail($id);
        $package->name = $request->name;
        $package->status = $request->status;
        $package->description = $request->description;
        $package->price = $request->price;
        $package->start_date = $request->start_date;
        $package->end_date = $request->end_date;
        $package->trip_duration = $request->trip_duration;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path(path: 'images/Packages'), $imageName);
            $package->image = $imageName;
        }

        $package->save();

        return redirect()->route('package.index')->with('success', 'Package ' . $package->name . ' updated successfully');
    }
    public function delete($id)
    {
        $package_del = Package::where('id', $id)->first();
        if ($package_del) {
            $package_del->delete();
            return redirect()->route('package.index')->with('success', 'package' . "\t" . $package_del->name . "\t" . ' deleted successfully!');
        } else {
            return redirect()->route('package.index')->with('error',  'Package not found!');
        }
    }
}
