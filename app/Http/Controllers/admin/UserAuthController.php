<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\Console\Input\Input;

class UserAuthController extends Controller
{
    //
    function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
                return redirect()->intended('/admin');

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }
    protected function usercreateadd(Request $request) {


        if(User::where('email', '=', $request->email)->exists())
        {
            return redirect()->back()->with('error', 'user email is added before!');

        }else{
            $data=new User();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = bcrypt($request->password);
            $data->save();
            return redirect()->back()->with('success', 'user added');
        }
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'))->with('loggedout', 'user logged out');
    }

}
