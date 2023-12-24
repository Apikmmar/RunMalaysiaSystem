<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    //
    public function login() {
        return view('manageRegistrationAndLogin.login');
    }

    public function loginPost(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role_id' => 'required',
        ]);
    
        $credentials = $request->only('username', 'password');
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            if ($user->role_id == $request->input('role_id')) {
                if ($user->role_id == 1) {
                    return redirect()->intended(route('adminhome'));
                } elseif ($user->role_id == 2) {
                    return redirect()->intended(route('userhome'));
                }
            }
        }
        
        return redirect(route('login'))->with("error", "Login details are not valid!");
    }
    

    public function register() {
        return view('manageRegistrationAndLogin.register');
    }

    public function registrationPost(Request $request) {
        $request->validate([
            'fullname' => 'required',
            'ic' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
            'user_role' => 'required',
        ]);

        $data['user_fullname'] = $request->fullname;
        $data['user_ic'] = $request->ic;
        $data['user_email'] = $request->email;
        $data['username'] = $request->username;
        $data['password'] = Hash::make($request->password);

        if($request->user_role == 'Administrator') {
            $data['role_id'] = '1';
        } else {
            $data['role_id'] = '2';
        }

        $user = User::create($data);

        if(!$user) {
            return redirect(route('register'))->with("error", "Register again");
        }
        
        return redirect(route('login'))->with("success", "Registration successful!");
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return redirect(route('login'));
    }
}
