<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
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
        return view('pages.appointment');
    }

    public function search(Request $request)
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required'
        ]);

        $clinic = App\Clinic::findOrFail(1);

        try {
            $clinic->appointments()->create([
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

    public function save(Appointment $appointment, Request $request)
    {

    }

    public function destroy($id)
    {
        //
    }
}
