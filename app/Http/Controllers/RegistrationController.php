<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('session.register');
    }

        public function store(Request $request)
    {

        $this->validate($request,
            [
            'username' => 'bail|required|max:12',
            'email' => 'bail|required|max:20|email',
            'password' => 'bail|required|confirmed'
            ]
        );

        $user = User::create([

            'username' => $request->input('username'),
            'email'=> $request->input('email'),
            'password' => bcrypt($request->input('password')),

            ]);

        auth()->login($user);

        return redirect()->home();

    }

}
