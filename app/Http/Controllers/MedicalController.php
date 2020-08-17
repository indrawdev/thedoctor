<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalController extends Controller
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
        return view('pages.medical');
    }

    public function store(Request $request)
    {
        $request->validation([
            'anamnesa' => 'required',
            'diagnosis' => 'required',
            'action' => 'required',
            'total' => 'required'
        ]);

        $doctor = App\Doctor::findOrFail(1);
        
        try {

            $medical = $doctor->records()->create([
                'doctor_id' => $doctor->id,
                'registration_id' => $request->registration,
                'patient_id' => $request->patient,
                'fee_id' => $request->fee,
                'anamnesa' => $request->anamnesa,
                'diagnosis' => $request->diagnosis,
                'action' => $request->action,
                'total' => $request->total
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
        $record = App\MedicalRecord::findOrFail($id);
        $record->delete();
    }
}
