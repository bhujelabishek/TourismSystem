<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Mountain;
use Illuminate\Http\Request;

class MountainesController extends Controller
{
    public function index()
    {
        $mountains = Mountain::all();
        return view('Backend.mountaines.index', compact('mountains'));

    }
    public function toggleStatus($id)
    {
        $mountain = Mountain::findOrFail($id);
        $mountain->status = !$mountain->status; // Toggle status
        $mountain->save();

        return redirect()->route('mountaines.index')->with('success', 'Mountain status updated successfully.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description'=>'nullable|string',
            'location'=>'required|string',
            'height'=>'required|numeric',
            'status' => 'nullable|boolean',
            'price'=>'nullable|numeric',
            'trek_difficulty'=>'required|in:Easy,Moderate,Hard',
            ]);
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/Mountains'), $imageName);
            }
            $mountain=new Mountain();
            $mountain->name=$request->name;
            $mountain->image=$imageName;
            $mountain->description=$request->description;
            $mountain->location=$request->location;
            $mountain->height=$request->height;
            $mountain->package_price=$request->price;
            $mountain->trek_difficulty=$request->trek_difficulty;
            $mountain->save();
              // TO RETURN TO ANOTHER PAGE AFTER INSERTING WITH SUCESS MESSAGE
              return redirect()->route('mountaines.index')
               ->with('success','mountaines'."\t".$mountain->name ."\t".'created sucessfully');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|string',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description'=>'nullable|string',
            'location'=>'required|string',
            'height'=>'required|numeric',
            'status' => 'nullable|boolean',
            'price'=>'nullable|numeric',
            'trek_difficulty'=>'required|in:Easy,Moderate,Hard',
            ]);
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/Mountains'), $imageName);
            }
            $mountain=Mountain::where('id',$id)->get();
            foreach($mountain as $data){
                $data->name=$request->name;
                $data->image=$imageName;
                $data->description=$request->description;
                $data->location=$request->location;
                $data->height=$request->height;
                $data->package_price=$request->price;
                $data->trek_difficulty=$request->trek_difficulty;
                $data->save();
            }
          // TO RETURN TO ANOTHER PAGE AFTER INSERTING WITH SUCESS MESSAGE
           return redirect()->route('mountaines.index')->with('success','mountaines'."\t".$data->name ."\t".'updated sucessfully');
    }
    public function show($id)
    {
        $mountain = Mountain::findOrFail($id);
        return view('frontend.front.show', compact('mountain'));
    }


    public function create()
    {
        return view('Backend.mountaines.create');
    }
    public function delete($id)
    {
        $mountain = Mountain::findOrFail($id);
        $mountain->delete();
        return redirect()->route('mountaines.index')->with('success', 'Mountain deleted successfully.');
    }

    public function edit($id)
    {
        $mountaines_data=Mountain::where('id',$id)->first();
        return view('Backend.mountaines.edit', compact('mountaines_data'));
    }

}
