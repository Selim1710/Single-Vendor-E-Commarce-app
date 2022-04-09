<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function loginForm()
    {
        return view('website.pages.login');
    }
    public function doLogin(Request $request){
        $request->validate([
            "email" => 'required',
            "password" => 'required',
            
        ]);
        $userData = $request->except('_token');
        if(Auth::attempt($userData)){
            return redirect()->route('website.home')->with('message','Login Successful');
        }else{
            return redirect()->route('users.login.form')->with('error','Invalid username or password');

        }
    }

    public function registrationForm()
    {
        return view('website.pages.registration');
    }
    public function doRegistration(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "email" => 'required|unique:users',
            "password" => 'required',
            "address" => 'required',
            "phone" => 'required',
        ]);
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "address" => $request->address,
            "phone" => $request->phone,
        ]);
        return redirect()->route('users.login.form')->with('message', 'You have registered. Now you can login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('website.home')->with('error', 'Logout successful');
    }


    public function profile($id)
    {
        $user=User::find($id);
        return view('website.pages.profile',compact('user'));
    }


    public function edit($id)
    {
        $user=User::find($id);
        return view('website.pages.edit_profile',compact('user'));
    }
    public function updateProfile(Request $request,$id){
        $user = User::find($id);
        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            "address" => $request->address,
            "phone" => $request->phone,
        ]);
        return redirect()->route('user.profile',$user->id)->with('message', 'Profile Updated');

    }
}
