<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $doctor = App\Doctor::findOrFail(1);

        $item = $doctor->items()->create([
            'doctor_id' => $doctor->id,
            'unit_id' => $request->unit,
            'distributor_id' => $request->distributor,
            'name' => $request->name,
            'stock' => $request->stock,
            'price' => $request->price
        ]);
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
