<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
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
        $doctor = App\Doctor::findOrFail(1);

        $patient = $doctor->patients()->create([
            'doctor_id' => $doctor->id,
            'name' => $request->name,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'blood' => $request->blood
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
        //
    }

    public function destroy($id)
    {
        //
    }
}
