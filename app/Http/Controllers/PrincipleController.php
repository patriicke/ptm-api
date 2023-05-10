<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\School;
use Hash;
use Auth;
use Yajra\DataTables\DataTables;
use URL;
class PrincipleController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data =  User::where('type','principle')->with('schools')->latest()->get();
            // dd($data);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    //   $btn = ' <div class=""><a href="#" class="btn btn-sm bg-success-light me-2"><i class="feather-eye"></i></a>';
                    $btn = ' <a href="' . url("edit-principle") . '/' . $row->id . '" class="btn btn-sm bg-danger-light"><i class="feather-edit"></i></a></div>';
                    return $btn;
                })->editColumn('image',function ($img){
                    $path = URL::asset('images/principle/'.$img->image) ;
                    return "<img src='".$path."' height='120' width='120'>";
                })
                ->escapeColumns([])
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('principles');
    }
    public function create(Request $request)
    {
        $schools = School::get();
        return view('add-principle',compact('schools'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $principle = new User;
        $principle->name = $request->name;
        $principle->email = $request->email;
        $principle->type = 'principle';
        $principle->school = $request->school_id;
        $image = time().''.rand(10,10000).'.'.$request->file('image')->getClientOriginalExtension();
        $request->image->move(public_path('images/principle'), $image);
        $principle->image = $image;

        $principle->monthly_fee = $request->monthly_fee;
        $principle->password = Hash::make($request->password);

        $principle->save();
        return redirect('/principles')->with('success', 'Record Saved Successfully');
    }

    public function edit($id)
    {
        $principle = User::with('schools')->find($id);
        // dd($principle);
        $schools = School::get();
        return view('edit-principle', compact('principle','schools'));
    }

    public function update(Request $request)
    {
        
        $principle = User::find($request->principle_id);
        $principle->name = $request->name;
        $principle->email = $request->email;
        $principle->school = $request->school_id;
        $principle->monthly_fee = $request->monthly_fee;
        if ($request->file('image')) {
            $image = time().''.rand(10,10000).'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('images/principle'), $image);
            $principle->image = $image;
        }

        if(!empty($request->password)){
            $principle->password = Hash::make($request->password);
        }
        $principle->save();
        return redirect('/principles')->with('success', 'Record Saved Successfully');
    }
}
