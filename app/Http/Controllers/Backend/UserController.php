<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::latest()->get();
        // dd($users);
        return view('Backend.user.index',compact('users'));

    }
    public function create()
    {
        return view('Backend.user.create');
    }

    public function toggleStatus($id)
    {
        $user = User::findOrFail($id);
        $user->status = !$user->status; // Toggle status
        $user->save();

        return redirect()->route('user.index')->with('success', 'User status updated successfully.');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'username'=>'required|string',
            'email'=>'required|email',
            'password'=>'required|min:8|confirmed',
            'status'=>'nullable|boolean',
            'phone'=>'nullable|integer',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/Users'), $imageName);
            }
            $user=new User();
            $user->name=$request->username;
            $user->email=$request->email;
            $user->phone=$request->phone;
            $user->status=$request->status;
            $user->image=$imageName ?? 'default.png'; ;
            $user->password=bcrypt($request->password);
            $user->save();
          // TO RETURN TO ANOTHER PAGE AFTER INSERTING WITH SUCESS MESSAGE
                 return redirect()->route('user.index')->with('success','User created sucessfully');

    }

    public function edit()
    {
        return view('Backend.user.edit');
    }
    public function update(Request $request, $id)
    {
        //     $request->validate([
        //         'name'=>'required|string',
        //         'email'=>'required|email',
        //         'password'=>'required|string|min:8|confirmed',
        //         ]);
        //         $user=User::find($id);
        //         // echo $request->CategoryName;
        //         $user=User::where('id',$id)->get();

        //   // TO RETURN TO ANOTHER PAGE AFTER INSERTING WITH SUCESS MESSAGE
        //          return redirect()->route('categories.index')->with('success','updated sucessfully');
    }
    public function delete($id)
    {
        $user_del = User::where('id', $id)->first();
        if ($user_del) {
            $user_del->delete();
            return redirect()->route('user.index')->with('success', 'user' . "\t" . $user_del->name . "\t" . ' deleted successfully!');
        } else {
            return redirect()->route('user.index')->with('error',  'user not found!');
        }
    }
    public function logout()
    {
        // Auth::logout();
        // return redirect('/login')->with('success', 'Logout successfully');
    }
}
