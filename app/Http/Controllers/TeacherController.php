<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\School;
use Hash;
use Auth;
use Yajra\DataTables\DataTables;
class TeacherController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = User::where('type','teacher')->latest()->get();
            if (Auth::user()->type == 'principle') {
                $data = User::where(['type'=>'teacher','school'=>Auth::user()->school])->latest()->get();
            }
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        //   $btn = ' <div class=""><a href="#" class="btn btn-sm bg-success-light me-2"><i class="feather-eye"></i></a>';
                           $btn = ' <a href="'. url("edit-teacher") .'/'. $row->id . '" class="btn btn-sm bg-danger-light"><i class="feather-edit"></i></a></div>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('teachers');
    }

    public function create(Request $request)
    {
        
        $schools = School::get();
        if (Auth::user()->type == 'principle') {
            $schools = School::where('id',Auth::user()->school)->get();
        }
        return view('add-teacher',compact('schools'));
    }

    public function store(Request $request)
    {
        $teacher = new User;
        // $teacher->unique_id = $request->unique_id;
        $teacher->name = $request->name;
        $teacher->last_name = $request->last_name;
        $teacher->type = 'teacher';
        // $teacher->gender = $request->gender;
        // $teacher->dob = $request->dob;
        $teacher->phone = $request->phone;
        // $teacher->joining_date = $request->joining_date;
        // $teacher->qualification = $request->qualification;
        // $teacher->experience = $request->experience;
        $teacher->email = $request->email;
        $teacher->sec_email = $request->sec_email;
        $teacher->school = $request->school_id;
        $teacher->password = Hash::make($request->password);
        $teacher->address = $request->address;
        $teacher->city = $request->city;
        $teacher->state = $request->state;
        $teacher->zip_code = $request->zip_code;
        $teacher->country = $request->country;
        $teacher->save();
        return redirect('/teachers')->with('success', 'Record Saved Successfully');
    }

    public function edit($id)
    {
        $teacher = User::with('schools')->find($id);
        // dd($teacher);
        $schools = School::get();
        if (Auth::user()->type == 'principle') {
            $schools = School::where('id',Auth::user()->school); 
        }
        return view('edit-teacher',compact('teacher','schools'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $teacher = User::find($request->teacher_id);
        // $teacher->unique_id = $request->unique_id;
        $teacher->name = $request->name;
        $teacher->last_name = $request->last_name;
        $teacher->type = 'teacher';
        // $teacher->gender = $request->gender;
        // $teacher->dob = $request->dob;
        $teacher->phone = $request->phone;
        $teacher->school = $request->school_id;
        // $teacher->joining_date = $request->joining_date;
        // $teacher->qualification = $request->qualification;
        // $teacher->experience = $request->experience;
        $teacher->email = $request->email;
        $teacher->sec_email = $request->sec_email;
        if(!empty($request->password)){
            $teacher->password = Hash::make($request->password);
        }
        $teacher->address = $request->address;
        $teacher->city = $request->city;
        $teacher->state = $request->state;
        $teacher->zip_code = $request->zip_code;
        $teacher->country = $request->country;
        $teacher->save();
        return redirect('/teachers')->with('success', 'Record Updated Successfully');
    }

}
