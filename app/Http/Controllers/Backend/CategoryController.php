<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        // dd($categories);
        return view('Backend.category.index', compact('categories'));
    }

    public function create()
    {
        return view('Backend.category.create');
    }

    public function toggleStatus($id)
    {
        $category = Category::findOrFail($id);
        $category->status = !$category->status; // Toggle status
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category status updated successfully.');
    }

    public function store(Request $request)
    {
        $request->validate(rules: [
            'name' => 'required|string',
            'status' => 'required|nullable|boolean',
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->status = $request->status;
        $category->save();
        // TO RETURN TO ANOTHER PAGE AFTER INSERTING WITH SUCESS MESSAGE
        return redirect()->route('categories.index')->with('success', 'Category created sucessfully');
        //    return response()->json(['message' => 'Category created successfully','category' => $category,]);
    }

    public function edit($id)
    {
        // $category_data=Category::where('id',$id)->first();
        return view('Backend.category.edit', compact('category_data'));

    }


    public function update(Request $request, $id)
    {
        //     $request->validate([
        //         'name'=>'required|string',
        //         ]);
        //         // echo $request->CategoryName;
        //         $category=Category::where('id',$id)->get();
        //         foreach($category as $data){
        //         $data->name=$request->name;
        //         $data->save();
        //         }
        //   // TO RETURN TO ANOTHER PAGE AFTER INSERTING WITH SUCESS MESSAGE
        //          return redirect()->route('categories.index')->with('success','Category'."\t".$data->name ."\t".'updated sucessfully');
    }


    public function delete($id)
    {
        // $category_del=Category::where('id',$id)->first();
        // if ($category_del) {
        //     $category_del->delete();
        //     return redirect()->route('categories.index')->with('success', 'Category'."\t".$category_del->name ."\t".' deleted successfully!');
        // } else {
        //     return redirect()->route('categories.index')->with('error', $category_del->name ."\t". 'not found!');
        // }
    }
}
