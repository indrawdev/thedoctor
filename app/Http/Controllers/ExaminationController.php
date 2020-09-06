<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExaminationController extends Controller
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
        return view('pages.examination');
    }

    public function store(Request $request)
    {
        $request->validation([
            'anamnesa' => 'required',
            'diagnosis' => 'required',
            'action' => 'required',
            'total' => 'required'
        ]);

        $clinic = App\Clinic::findOrFail(1);
        
        try {

            $medical = $clinic->medicals()->create([
                'clinic_id' => $clinic->id,
                'registration_id' => $request->registration,
                'patient_id' => $request->patient,
                'doctor_id' => $request->doctor,
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
        //
    }
}
