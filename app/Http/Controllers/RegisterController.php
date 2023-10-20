<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request) {
        $validateData = $request->validate ([
            'name' => 'required|max:50',
            'username' => 'required|unique:users|min:5|max:50',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:50'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);
        
        /* $request->session()->flash('status', 'Task was successful!'); */
        
        return redirect('/login')->with('Registation success', 'Please Login');
        
    }
}
