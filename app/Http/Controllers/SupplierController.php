<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinic;

class SupplierController extends Controller
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
        return view('pages.supplier');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);
        
        $clinic = Clinic::findOrFail(1);

        try {
            
            $supplier = $clinic->supplier()->create([
                'name' => $request->name,
                'address' => $request->address,
                'contact' => $request->contact,
                'phone' => $request->phone,
                'email' => $request->email
            ]);

            return response()->json(['success' => true]);

        } catch (\Throwable $th) {
            return response()->json(['success' => false]);
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
