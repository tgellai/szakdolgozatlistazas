<?php

namespace App\Http\Controllers;

use App\Models\Szakdoga;
use Illuminate\Http\Request;

class SzakdogaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Szakdoga::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $szakdoga = new Szakdoga();
        $szakdoga -> szakdoga_nev = $request -> szakdoga_nev;
        $szakdoga -> githublink = $request -> githublink;
        $szakdoga ->  oldallink = $request -> oldallink;
        $szakdoga ->  tagokneve= $request -> tagokneve;
        $szakdoga->save();
        return view("/api/szakdogak");
    }

    public function show(Szakdoga $szakdoga)
    {
        
    }

    public function edit(Szakdoga $szakdoga)
    {
        
    }

    public function update(Request $request, Szakdoga $szakdoga)
    {
    $szakdoga = Szakdoga::find($id);
    $szakdoga -> szakdoga_nev = $request -> szakdoga_nev;
    $szakdoga -> githublink = $request -> githublink;
    $szakdoga ->  oldallink = $request -> oldallink;
    $szakdoga ->  tagokneve= $request -> tagokneve;
    $szakdoga -> save();
    return view("/api/szakdogak");
    }

    public function destroy(Szakdoga $szakdoga)
    {
        $szakdoga = Szakdoga::find($id);
	    return $szakdoga->delete();
        return view("/api/szakdogak");

    }
}
