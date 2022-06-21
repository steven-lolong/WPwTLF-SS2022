<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;

class UserController extends Controller
{
    public function create(Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:15',
            'cpassword' => 'required|same:password',
        ], [
            'cpassword.required' => 'The confirm field is required.',
            'cpassword.same' => 'Confirm password and password must match.'
        ]);

        // call user model and safe
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $data = $user->save();

        if($data){
            return redirect()->back()->with('success', 'You have registered successfully.');
        }else{
            return redirect()->back()->with('error', 'Registration failed.');
        }

    }

    public function dologin(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:15',
        ]);

        $check = $request->only('email', 'password');

        if(Auth::guard('web')->attempt($check)){
            return redirect()->route('user.home')->with('success', 'Welcome to dashboard');
        }else {
            return redirect()->back()->with('error', 'Login Failed.');
        }
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
