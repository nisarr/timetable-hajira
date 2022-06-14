<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teacher;
use App\Models\Department;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = User::where('role',User::ROLE_TEACHER)->get();
        return view('admin.teacher.index',compact('teachers'));
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
        return view('admin.teacher.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teachers = new User;
        if($request->hasFile('image'))
        {
            $image = $request->image;
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/teacher/profile');
            $image->move($destinationPath, $name);
            $teachers->image = $name;
        }
        $teachers->name = $request->teacher_name;
        $teachers->email = $request->email;
        $teachers->depart_id = $request->depart_id;
        $teachers->password = bcrypt($request->password);
        $teachers->role = User::ROLE_TEACHER;
        $teachers->save();
        toastr()->success('Teacher Added successfully!');
        return redirect('teachers');
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
        $teacher = User::where('id',$id)->first();
        if(!$teacher){
            return redirect()->route('teachers.index');
        }
        // dd($teacher);
        $departments = Department::all();
        return view('admin.teacher.edit',compact('teacher','departments'));
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
        $teachers = User::find($id);
        if($request->hasFile('image'))
        {
            $image = $request->image;
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/teacher/profile');
            $image->move($destinationPath, $name);
            $teachers->image = $name;
        }
        $teachers->name = $request->teacher_name;
        $teachers->email = $request->email;
        $teachers->depart_id = $request->depart_id;

        if($request->password){
            $teachers->password = bcrypt($request->password);
        }

        $teachers->save();
        toastr()->success('Teacher Updated successfully!');
        return redirect('teachers');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teachers = User::find($id);
        $teachers->delete();
        toastr()->error('Teacher Deleted successfully!');
        return redirect('teachers');
    }
}
