<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\User;
use App\Models\School;
use Auth;
use Hash;
class StudentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data =  User::where('type','student')->with('schools','parents','teachers')->latest()->get();
            if (Auth::user()->type == 'principle') {
                $data = User::where(['type'=>'student','school'=>Auth::user()->school])->latest()->get();
            }
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                      $btn = ' <a href="' . url("student-details") . '/' . $row->id . '" class="btn btn-sm bg-danger-light"><i class="feather-eye"></i></a></div>';
                    $btn .= ' <a href="' . url("edit-student") . '/' . $row->id . '" class="btn btn-sm bg-danger-light"><i class="feather-edit"></i></a></div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('students');
    }
    public function create(Request $request)
    {
        $schools = School::get();
        $parents = User::where('type','parent')->get();
        $teachers = User::where('type','teacher')->get();
        if (Auth::user()->type == 'principle') {
            $schools = School::where('id',Auth::user()->school)->get();
        }
        return view('add-student',compact('schools','parents','teachers'));
    }

    public function store(Request $request)
    {
        $student = new User;
        $student->unique_id = $request->unique_id;
        $student->name = $request->name;
        $student->type = 'student';
        $student->gender = $request->gender;
        $student->dob = $request->dob;
        $student->school = $request->school_id;
        $student->phone = $request->phone;
        $student->admission_id = $request->admission_id;
        $student->school = $request->school_id;
        $student->parent = $request->parent_id;
        $student->teacher = $request->teacher_id;
        $student->roll_number = $request->roll_number;
        $student->class = $request->class;
        $student->section = $request->section;
        $student->blood_group = $request->blood_group;
        $image = time().''.rand(10,10000).'.'.$request->file('image')->getClientOriginalExtension();
        $request->image->move(public_path('images/student'), $image);
        $student->image = $image;
        $student->religion = $request->religion;
        $student->email = $request->email;
        // $student->image = $request->image;
        // $student->password = Hash::make($request->password);
        // $student->address = $request->address;
        // $student->city = $request->city;
        // $student->state = $request->state;
        // $student->country = $request->country;
        $student->save();
        return redirect('/students')->with('success', 'Record Saved Successfully');
    }

    public function edit($id)
    {
        $student = User::with('schools')->find($id);
        $schools = School::get();
        $parents = User::where('type','parent')->get();
        $teachers = User::where('type','teacher')->get();
        if (Auth::user()->type == 'principle') {
            // dd(Auth::user()->school);
            $schools = School::where('id',Auth::user()->school); 
        }
        
        return view('edit-student', compact('student','schools','teachers','parents'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $student = User::find($request->student_id);
        $student->unique_id = $request->unique_id;
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->dob = $request->dob;
        $student->phone = $request->phone;
        $student->admission_id = $request->admission_id;
        $student->school = $request->school_id;
        $student->parent = $request->parent_id;
        $student->teacher = $request->teacher_id;
        $student->roll_number = $request->roll_number;
        $student->class = $request->class;
        $student->section = $request->section;
        $student->blood_group = $request->blood_group;
        $student->religion = $request->religion;
        $student->email = $request->email;
        // $student->image = $request->image;
        if ($request->file('image')) {
            $image = time().''.rand(10,10000).'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('images/student'), $image);
            $student->image = $image;
        }
        // if(!empty($request->password)){
        //     $student->password = Hash::make($request->password);
        // }
        // $student->address = $request->address;
        // $student->city = $request->city;
        // $student->state = $request->state;
        // $student->country = $request->country;
        $student->save();
        return redirect('/students')->with('success', 'Record Updated Successfully');
    }
    public function details($id)
    {
        $student = User::with('schools')->find($id);
        $schools = School::get();
        if (Auth::user()->type == 'principle') {
            // dd(Auth::user()->school);
            $schools = School::where('id',Auth::user()->school); 
        }
        
        return view('student-details', compact('student','schools'));
    }
}
