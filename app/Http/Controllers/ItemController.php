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

    public function search(Request $request)
    {
        //
    }

    public function create()
    {
        return view('pages.item');
    }

    public function store(Request $request)
    {
        $clinic = App\Models\Clinic::findOrFail(1);

        try {

            $item = $clinic->items()->create([
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
