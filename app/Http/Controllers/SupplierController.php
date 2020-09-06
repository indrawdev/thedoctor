<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

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

        $supplier = new Supplier();
        $supplier->clinic_id = 0;
        $supplier->name = $request->name;
        $supplier->address = $request->address;
        $supplier->contact = $request->contact;
        $supplier->phone = $request->phone;
        $supplier->email = $request->email;
        $supplier->save();

        return response()->json(['success' => true]);
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
