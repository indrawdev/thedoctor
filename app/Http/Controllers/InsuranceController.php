<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InsuranceController extends Controller
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
        return view('pages.insurance');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $insurance = new App\Insurance;
        $insurance->name = $request->name;
        $insurance->save();
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

    public function bpjs(Request $request)
    {
        // Basic authentication...
        $response = Http::withBasicAuth('taylor@laravel.com', 'secret')->post([
            '' => ''
        ]);

        $response = Http::withToken('token')->post([
            '' => ''
        ]);
    }
}
