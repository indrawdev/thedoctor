<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class LetterController extends Controller
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
        return view('pages.letter');
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient' => 'required',
        ]);

        $clinic = App\Models\Clinic::findOrFail(1);

        try {

            $officer = $clinic->letters()->create([
                'patient_id' => $request->patient,
                'medical_id' => $request->medical
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

    public function reference()
    {
        $pdf = PDF::loadView('prints.letters.reference');
        return $pdf->stream();
    }

    public function health()
    {
        $pdf = PDF::loadView('prints.letters.health');
        return $pdf->stream();
    }

    public function sick()
    {
        $pdf = PDF::loadView('prints.letters.sick');
        return $pdf->stream();
    }

    public function pregnant()
    {
        $pdf = PDF::loadView('prints.letters.pregnant');
        return $pdf->stream();
    }

}
