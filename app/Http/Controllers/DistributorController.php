<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistributorController extends Controller
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
        return view('pages/distributor');
    }

    public function store(Request $request)
    {
        $doctor = App\Doctor::findOrFail(1);

        try {

            $distributor = $doctor->distributors()->create([
                'doctor_id' => $doctor->id,
                'name' => $request->name
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
