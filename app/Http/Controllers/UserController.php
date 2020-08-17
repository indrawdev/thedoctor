<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //    
    }

    public function create()
    {
        return view('pages.user');
    }
    
    public function store(Request $request)
    {
        $user = App\User::findOrFail($request->user);
        
        try {

            $doctor = $user->doctor()->create([
                'user_id' => $user->id,
                'name' => $user->name
            ]);

        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function approve(Request $request)
    {
        
    }
}
