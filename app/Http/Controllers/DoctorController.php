<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Doctor;

class DoctorController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = App\User::findOrFail(1);

        $user->doctor()->create([
            'user_id' => $user->id,
            'name' => $request->name,
            'address' => $request->address,
            'zipcode' => $request->zipcode
        ]);
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
        $request->validation([
            'name' => 'required',
            'address' => 'required'
        ]);

        $doctor = Doctor::findOrFail($id);
        $doctor->name = $request->name;
        $doctor->address = $request->address;
        $doctor->save();
    }

    public function destroy($id)
    {
        //
    }
}
