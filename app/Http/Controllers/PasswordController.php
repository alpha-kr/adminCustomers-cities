<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasswordController extends Controller
{

    public function showForm(Request $request)
    {
        return view('auth.passwords.setpassword',$request->input());
    }
    public function setPassword(Request $request)
    {
        $request->validate(['password'=>'confirmed|required|min:8|string|max:255']);
        $user=User::where('password_token',$request->token)->where('email',$request->user)->first();
        $user->password=bcrypt($request->password);
        $user->verified=true;
        $user->save();
        Auth::loginUsingId($user->id);
        
        return redirect('/');
    }
}
