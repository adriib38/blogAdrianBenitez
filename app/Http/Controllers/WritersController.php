<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Writer;


class WritersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $writers = Writer::all();
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
     * @param  \App\Models\Writer  $writers
     * @return \Illuminate\Http\Response
     */
    public function show(Writer $writer)
    {
 
        return view('writers.show', compact('writer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Writer  $writers
     * @return \Illuminate\Http\Response
     */
    public function edit(Writer $writers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Writer  $writers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Writer $writers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Writer  $writers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Writer $writers)
    {
        //
    }

    
 
}
