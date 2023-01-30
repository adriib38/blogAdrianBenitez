<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;


class SalesController extends Controller
{
    public function index()
    {   
        $sales = Sale::all();
        return view('sales.index', compact('sales'));
    }

    public function show($id)
    {
        $sale = Sale::findOrFail($id);
        return view('sales.show', compact('sale'));
    }

    public function edit($id)
    {
        $sale = Sale::findOrFail($id);
        return view('sales.edit', compact('sale'));
    }

    public function create()
    {
        return view('sales.create');
    }

    public function empresa($companyName)
    {
        $sales = Sale::where('company', $companyName)->get();
        return view('sales.company', compact('sales', 'companyName'));
    }

    

}
