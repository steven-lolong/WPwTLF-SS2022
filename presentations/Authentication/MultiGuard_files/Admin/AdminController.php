<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use Hash;

class AdminController extends Controller
{
    public function create(Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'phone' => 'required',
            'password' => 'required|min:6|max:15',
            'cpassword' => 'required|same:password',
        ], [
            'cpassword.required' => 'The confirm field is required.',
            'cpassword.same' => 'Confirm password and password must match.'
        ]);

        // call Admin model and safe
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->password = Hash::make($request->password);
        $data = $admin->save();

        if($data){
            return redirect()->back()->with('success', 'You have registered successfully.');
        }else{
            return redirect()->back()->with('error', 'Registration failed.');
        }

    }

    public function dologin(Request $request){

        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:6|max:15',
        ]);

        

        $check = $request->only('email', 'password');

        if(Auth::guard('admin')->attempt($check)){
            return redirect()->route('admin.home')->with('success', 'Welcome to dashboard');
        }else {
            return redirect()->back()->with('error', 'Login Failed.');
        }
    }

    public function logout(Request $request){
        
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
