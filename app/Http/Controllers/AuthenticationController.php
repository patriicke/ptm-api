<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->type == 'principle') {
                return redirect('/principle-dashboard');
            }
            return redirect('/dashboard');
        }
  
        return redirect()->back()->with('invalidCredentials', 'Invalid Login Details');
    }
    public function index(){
        return view('login');
    }
}
