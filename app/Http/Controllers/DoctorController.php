<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Doctor;

class DoctorController extends Controller
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
        return view('pages.doctor');
    }

    public function store(Request $request)
    {
        $request->validation([
            'name' => 'required',
            'address' => 'required',
            'zipcode' => 'required'
        ]);

        $clinic = App\Clinic::findOrFail(1);

        try {

            $clinic->doctor()->create([
                'name' => $request->name,
                'address' => $request->address,
                'zipcode' => $request->zipcode
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
