<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UsersController extends Controller
{

    public function profile()
    {
        //
        return view("user.profile");
    }

    public function login()
    {
        //
        return view("user.login");
    }

    public function register()
    {
        //
        return view("user.register");
    }

    public function store(UserRequest $request)
    {
        // CREATE NEW USER IN DATABASE
        $user = User::create([
            "name" => request("name"),
            "username" => request("username"),
            "password" => request("password"),
        ]);

        // LET NEW USER TO LOGIN 
        auth()->login($user);
        
        // REDIRECT TO HOME PAGE WITH A MESSAGE SUCCESS
        return redirect("/")->with(["success" => "Registration completed successfully"]);

    }

    public function userLogin(LoginRequest $request)
    {
        // CHECK THE USERNAME AND PASSWORD
        if(auth("web")->attempt(["username" => \request("username"), "password" => \request("password")])){
            // IF USERNAME AND PASSWORD EXISTS
            return redirect("/")->with("success","Welcome Back!");
        }
        // IF USERNAME AND PASSWORD NOT EXISTS
        return back()->withInput()->withErrors(["username" => "Your provided credentials could not be verified."]);
    }

    public function destroy()
    {
        // FOR LOGOUT USER
        auth()->logout();
        return redirect("/");
    }
}