<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teacher;
use App\Models\Department;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role',User::ROLE_ADMIN)->get();
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        // dd($departments);
        return view('admin.user.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User;
        if($request->hasFile('image'))
        {
            $image = $request->image;
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/teacher/profile');
            $image->move($destinationPath, $name);
            $users->image = $name;
        }
        $users->name = $request->teacher_name;
        $users->email = $request->email;
     
        $users->password = bcrypt($request->password);
        $users->role = User::ROLE_ADMIN;
        $users->save();
        toastr()->success('User Added successfully!');
        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        if(!$user){
            return redirect()->route('users.index');
        }
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        if($request->hasFile('image'))
        {
            $image = $request->image;
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/teacher/profile');
            $image->move($destinationPath, $name);
            $users->image = $name;
        }
        $users->name = $request->teacher_name;
        $users->email = $request->email;
   

        if($request->password){
            $users->password = bcrypt($request->password);
        }

        $users->save();
        toastr()->success('User Updated successfully!');
        return redirect('users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        toastr()->error('User Deleted successfully!');
        return redirect('users');
    }
}
