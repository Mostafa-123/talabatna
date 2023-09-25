<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function check(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:3|max:20'
        ]);

        $admin = User::where('email', '=', $request->email)->first();

        if(!$admin){
            return back()->with('fail', 'Error account');
        }else{
            if(Hash::check($request->password, $admin->password)){
                $request->session()->put('LoggedUser', $admin->id);
                return redirect('admin/dashboard');
            }else{
                return back()->with('fail', 'Incorrect password');
            }
        }
    }
}
