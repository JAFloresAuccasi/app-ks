<?php

namespace App\Http\Controllers\register;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function all_user()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function menu_sign_up()
    {
        return view('home_web.menu.sign_up');
    }

    public function processRegistration(Request $request)
    {
        // return $request;
        // print_r($request);
        // return false;  
        // $request->validate([
            
        //     'name' => ['required,string,min:4,max:100,unique:users'],
        //     'email' => ['required,string,min:6,max:250,unique:users'],
        //     'password' => ['required,confirmed,min:2,max:15', Rules\Password::defaults()],
        // ]);
 
  $request->validate(
        [
            'name' => 'required','string','min:4','max:100',
            'email' => 'required','string|email','min:4','max:250','unique:users',
            'password' => 'required','confirmed','min:4', Rules\Password::defaults(),
        ]
    );

         $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
        $user->save();

        return redirect(route('menu_login'));
  
            // return redirect()->route('login-user')->with('message','Your account is created');
      
    }

    public function menu_login()
    {
        return view('home_web.menu.login');
    }
}