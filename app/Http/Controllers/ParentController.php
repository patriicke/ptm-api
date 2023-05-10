<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\School;
use Hash;
use Yajra\DataTables\DataTables;

class ParentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::where('type','parent')->latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        //   $btn = ' <div class=""><a href="#" class="btn btn-sm bg-success-light me-2"><i class="feather-eye"></i></a>';
                           $btn = ' <a href="'. url("edit-parent") .'/'. $row->id . '" class="btn btn-sm bg-danger-light"><i class="feather-edit"></i></a></div>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('parents');
    }

    public function create(Request $request)
    {
        $schools = School::get();
        return view('add-parent',compact('schools'));
    }

    public function store(Request $request)
    {
        $parent = new User;
        $parent->name = $request->name;
        $parent->last_name = $request->last_name;
        $parent->type = 'parent';
        // $parent->gender = $request->gender;
        // $parent->dob = $request->dob;
        $parent->phone = $request->phone;
        $parent->email = $request->email;
        $parent->sec_email = $request->sec_email;
        $parent->password = Hash::make($request->password);
        $parent->address = $request->address;
        $parent->city = $request->city;
        $parent->state = $request->state;
        $parent->zip_code = $request->zip_code;
        $parent->country = $request->country;
        $parent->save();
        return redirect('/parents')->with('success', 'Record Saved Successfully');
    }

    public function edit($id)
    {
        $parent = User::find($id);
        return view('edit-parent',compact('parent'));
    }

    public function update(Request $request)
    {
        $parent = User::find($request->parent_id);
        $parent->name = $request->name;
        $parent->last_name = $request->last_name;
        // $parent->gender = $request->gender;
        // $parent->dob = $request->dob;
        $parent->phone = $request->phone;
        $parent->email = $request->email;
        $parent->sec_email = $request->sec_email;
        if(!empty($request->password)){
            $parent->password = Hash::make($request->password);
        }
        $parent->address = $request->address;
        $parent->city = $request->city;
        $parent->state = $request->state;
        $parent->zip_code = $request->zip_code;
        $parent->country = $request->country;
        $parent->save();
        return redirect('/parents')->with('success', 'Record Updated Successfully');
    }

}
