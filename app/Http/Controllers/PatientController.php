<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
    }

    public function search(Request $request)
    {
        //
    }

    public function create()
    {
        return view('pages.patient');
    }

    public function store(Request $request)
    {
        $clinic = App\Clinic::findOrFail(1);

        try {
            
            $patient = $clinic->patients()->create([
                'name' => $request->name,
                'dob' => $request->dob,
                'gender' => $request->gender,
                'blood' => $request->blood,
                'address' => $request->address
            ]);

        } catch (\Throwable $th) {
            //throw $th;
        }
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
