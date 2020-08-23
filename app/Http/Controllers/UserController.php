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

            $clinic = $user->doctor()->create([
                'name' => $user->name
            ]);

        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function approved(Request $request)
    {
        //
    }
}
