<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writers;

class WritersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $writers = Writers::all();
        return view('writers.index', compact('writers'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Writers  $writers
     * @return \Illuminate\Http\Response
     */
    public function show(Writers $writer)
    {
 
        return view('writers.show', compact('writer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Writers  $writers
     * @return \Illuminate\Http\Response
     */
    public function edit(Writers $writers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Writers  $writers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Writers $writers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Writers  $writers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Writers $writers)
    {
        //
    }

 
}
