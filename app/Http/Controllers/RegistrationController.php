<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\repository\UserRepository as user;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('session.register');
    }

    public function store(Request $request)
    {
        $this->validateInput($request);

        $user = user::createUser(

            request('username'),
            request('email'),
            request('password')

            );

        auth()->login($user);

        session()->flash('message', 'Registration successfull! Welcome to MyBlog!');

        return redirect()->home();
    }

    private function validateInput($request)
    {
        $this->validate($request,
            [
            'username' => 'bail|required|max:12',
            'email' => 'bail|required|max:20|email',
            'password' => 'bail|required|confirmed'
            ]
        );
    }
}
