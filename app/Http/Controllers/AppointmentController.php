<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('pages.appointment');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required'
        ]);

        $officer = App\Officer::findOrFail(1);

        try {
            $officer->appointments()->create([
                'appointment_at' => $request->date,
                'patient_id' => $request->patient,
                'officer_id' => $request->officer
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
