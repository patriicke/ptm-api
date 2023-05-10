<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\School;
use Hash;
use Yajra\DataTables\DataTables;
use URL;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::where('type','admin')->latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        //   $btn = ' <div class=""><a href="#" class="btn btn-sm bg-success-light me-2"><i class="feather-eye"></i></a>';
                           $btn = ' <a href="'. url("edit-admin") .'/'. $row->id . '" class="btn btn-sm bg-danger-light"><i class="feather-edit"></i></a></div>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admins');
    }

    public function create(Request $request)
    {
        $schools = School::get();
        return view('add-admin',compact('schools'));
    }

    public function store(Request $request)
    {
        // dd($request->file('image'));
        $admin = new User;
        $admin->name = $request->name;
        $admin->type = 'admin';
        $admin->gender = $request->gender;
        $admin->dob = $request->dob;
        $admin->phone = $request->phone;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->address = $request->address;
        
        $image = time().''.rand(10,10000).'.'.$request->file('image')->getClientOriginalExtension();
        $request->image->move(public_path('images/admin'), $image);
        $admin->image = $image;
        $admin->city = $request->city;
        $admin->state = $request->state;
        $admin->zip_code = $request->zip_code;
        $admin->country = $request->country;
        $admin->save();
        return redirect('/admins')->with('success', 'Record Saved Successfully');
    }

    public function edit($id)
    {
        $admin = User::find($id);
        return view('edit-admin',compact('admin'));
    }

    public function update(Request $request)
    {
        $admin = User::find($request->admin_id);
        $admin->name = $request->name;
        $admin->gender = $request->gender;
        $admin->dob = $request->dob;
        $admin->phone = $request->phone;
        $admin->email = $request->email;
        
        if(!empty($request->password)){
            $admin->password = Hash::make($request->password);
        }
        $admin->address = $request->address;
        if ($request->file('image')) {
            $image = time().''.rand(10,10000).'.'.$request->file('image')->getClientOriginalExtension();
            $request->image->move(public_path('images/admin'), $image);
            $admin->image = $image;
        }
        $admin->city = $request->city;
        $admin->state = $request->state;
        $admin->zip_code = $request->zip_code;
        $admin->country = $request->country;
        $admin->save();
        return redirect('/admins')->with('success', 'Record Updated Successfully');
    }
    public function change_password(Request $request){
        $user = User::find($request->user_id);
        // dd($request->all());
        if($user == null){
            return redirect()->back()->with('error','Record not found.');
        }
        // dd($request->oldPassword);
        if($request->oldPassword)
            if(!Hash::check($request->oldPassword,$user->password)){
                return redirect()->back()->with('error','Old Password is not correct.');
            }
        $user->password = Hash::make($request->password);
        
        if($user->save()){
            // if($user->type == 2){
            //     $user->tokens->each(function($token, $key) {
            //         $token->delete();
            //     });
            // }
            // Notification::send($user, new PasswordChanged($request->password));
            return redirect()->back()->with('success',$user->name . "'s password changed successfully.");
        }
        return redirect()->back()->with('error','Something went wrong.');
    }

}
