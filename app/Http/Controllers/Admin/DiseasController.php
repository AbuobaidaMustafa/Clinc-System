<?php

namespace App\Http\Controllers\Admin;

use App\Models\diseas;
use App\Models\diseasSubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiseasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diseas = diseas::all();
        $diseasSubCategory =  diseasSubCategory::all();
        return view('admin.diseases.index', ['subCategorys' => $diseasSubCategory, "categorys" => $diseas]);
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
     * @param  \App\Models\diseas  $diseas
     * @return \Illuminate\Http\Response
     */
    public function show(diseas $diseas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\diseas  $diseas
     * @return \Illuminate\Http\Response
     */
    public function edit(diseas $diseas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\diseas  $diseas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, diseas $diseas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\diseas  $diseas
     * @return \Illuminate\Http\Response
     */
    public function destroy(diseas $diseas)
    {
        //
    }
}
