<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
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
        return view('pages.profile');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        $clinic = App\Clinic::findOrFail(1);
        $clinic->name = $request->name;
        $clinic->address = $request->address;
        $clinic->phone = $request->phone;
        $clinic->email = $request->email;

        $clinic->save();
    }

    public function destroy($id)
    {
        //
    }
}
