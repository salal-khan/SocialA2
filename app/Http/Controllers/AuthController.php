<?php

namespace SocialAppp\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use SocialAppp\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //Sign in Settings

    public function getSignup()
    {
        return view('auth.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users|email|max:255',
            'username' => 'required|unique:users|alpha_dash|max:255',
            'password' => 'required|min:6',
        ]);
        User::create([

            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
        ]);
        return redirect()->route('home')->with('info', 'Your Account has been created and you can now sign in');
    }

    public function getSignin()
    {
        return view('auth.signin');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);

        if (!Auth::attempt($request->only(['email','password']),$request->has('remember'))){
            return redirect()->back()->with('info','Wrong User Name And Password');
        }
        return redirect()->route('home')->with('info','Your Are Now Sign In');
    }

    public function getSignout(){
        Auth::logout();

        return redirect()->route('home');
    }

}
