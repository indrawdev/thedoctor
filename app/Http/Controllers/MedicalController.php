<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

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

    public function search(Request $request)
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

        $clinic = App\Clinic::findOrFail(1);
        
        try {

            $medical = $clinic->records()->create([
                'clinic_id' => $clinic->id,
                'doctor_id' => $request->doctor,
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
        $record = App\Medical::findOrFail($id);
        $record->delete();
    }

    public function print()
    {
        $pdf = PDF::loadView('prints.patient');
        return $pdf->stream();
    }

    public function receipt()
    {
        $pdf = PDF::loadView('prints.payments.receipt');
        return $pdf->stream();
    }
}
