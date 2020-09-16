<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinic;

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

    public function search(Request $request)
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);

        $clinic = Clinic::findOrFail(1);

        try {

            $doctor = $clinic->doctor()->create([
                'name' => $request->name,
                'phone' => $request->phone
            ]);

            return response()->json(['success' => true]);
            
        } catch (\Throwable $th) {
            return response()->json(['success' => false]);
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
