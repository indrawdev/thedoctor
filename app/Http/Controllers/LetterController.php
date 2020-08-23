<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class LetterController extends Controller
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
        return view('pages.letter');
    }

    public function store(Request $request)
    {
        //
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

    public function patient()
    {
        $pdf = PDF::loadView('prints.patient');
        return $pdf->stream();
    }
}
