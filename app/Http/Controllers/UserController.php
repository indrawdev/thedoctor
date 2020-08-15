<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validation([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = new User();
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        $doctor->create([
            'user_id' => $user->id,
            'name' => $request->name
        ]);
    }
}
