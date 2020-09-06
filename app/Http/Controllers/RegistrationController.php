<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
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
        return view('pages.registration');
    }

    public function store(Request $request)
    {
        $clinic = App\Clinic::findOrFail(1);

        try {

            $register = $clinic->registers()->create([
                'clinic_id' => $clinic->id,
                'officer_id' => $request->officer,
                'patient_id' => $request->patient,
                'registered_at' => $request->registered
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
        $register = App\Registration::findOrFail($id);
        $register->delete();
    }
}
