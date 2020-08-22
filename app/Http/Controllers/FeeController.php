<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeeController extends Controller
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
        return view('pages.fee');
    }

    public function store(Request $request)
    {
        $doctor = App\Doctor::findOrFail(1);
        
        try {

            $fee = $doctor->fees->create([
                'doctor_id' => $doctor->id,
                'name' => $request->name,
                'price' => $request->price
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