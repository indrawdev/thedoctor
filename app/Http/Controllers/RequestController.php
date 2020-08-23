<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request as RequestSoftware;

class RequestController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('pages.request');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'clinic' => 'required'
        ]);

        $rs = new RequestSoftware();
        $rs->email = $request->email;
        $rs->name = $request->name;
        $rs->phone = $request->phone;
        $rs->clinic = $request->clinic;
        $rs->save(); 
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
