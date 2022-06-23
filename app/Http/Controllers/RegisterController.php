<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register.register', [
            'title' => 'Teacher Register'
        ]);
    }

    public function registerStudent()
    {
        return view('register.registerStudent', [
            'title' => 'Student Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => ['required', 'email:dns', 'max:255', 'unique:users'],
            'password' => 'required|min:6|max:12'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');
    }

    public function storeStudent(Request $request)
    {
        $validatedData = $request->validate([
            'studentfirst_name' => 'required|max:255',
            'studentlast_name' => 'required|max:255',
            'studentemail' => ['required', 'email:dns', 'max:255', 'unique:users'],
            'studentpassword' => 'required|min:6|max:12'
        ]);

        $validatedData['studentpassword'] = bcrypt($validatedData['studentpassword']);

        User::create($validatedData);

        return redirect('/loginStudent');
        //hi
    }
}
