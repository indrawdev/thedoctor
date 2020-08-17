<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
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
        return view('pages.item');
    }

    public function store(Request $request)
    {
        $doctor = App\Doctor::findOrFail(1);

        try {

            $item = $doctor->items()->create([
                'doctor_id' => $doctor->id,
                'unit_id' => $request->unit,
                'distributor_id' => $request->distributor,
                'name' => $request->name,
                'stock' => $request->stock,
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
