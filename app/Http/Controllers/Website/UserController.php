<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function loginForm()
    {
        return view('website.pages.login');
    }

   
    public function registrationForm()
    {
        return view('website.pages.registration');
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function profile()
    {
        return view('website.pages.profile');
    }

 
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
