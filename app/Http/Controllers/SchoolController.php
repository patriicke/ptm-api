<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;
use Yajra\DataTables\DataTables;
class SchoolController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = School::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        //   $btn = ' <div class=""><a href="#" class="btn btn-sm bg-success-light me-2"><i class="feather-eye"></i></a>';
                           $btn = ' <a href="'. url("edit-school") .'/'. $row->id . '" class="btn btn-sm bg-danger-light"><i class="feather-edit"></i></a></div>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('schools');
    }

    public function create(Request $request)
    {
        return view('add-school');
    }

    public function store(Request $request)
    {
        $school = new School;
        $school->name = $request->name;
        $school->zip_code = $request->zip_code;
        $school->address = $request->address;
        $school->city = $request->city;
        $school->state = $request->state;
        $school->country = $request->country;
        $school->save();
        return redirect('schools')->with('success', 'Record Saved Successfully');
    }

    public function edit($id)
    {
        $school = School::find($id);
        return view('edit-school',compact('school'));
    }

    public function update(Request $request)
    {
        $school = School::find($request->school_id);
        $school->name = $request->name;
        $school->zip_code = $request->zip_code;
        $school->address = $request->address;
        $school->city = $request->city;
        $school->state = $request->state;
        $school->country = $request->country;
        $school->save();
        return redirect('schools')->with('success', 'Record Updated Successfully');
    }

}
