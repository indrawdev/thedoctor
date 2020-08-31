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

    public function search(Request $request)
    {
        //
    }

    public function create()
    {
        return view('pages.fee');
    }

    public function store(Request $request)
    {
        $clinic = App\Clinic::findOrFail(1);
        
        try {

            $fee = $clinic->fees->create([
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
