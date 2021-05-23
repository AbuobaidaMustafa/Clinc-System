<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\measurement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MeasurementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        measurement::create([
            'drug_id' => $request->input('drug_name'),
            'name' => $request->input('measurment'),

        ]);
       return redirect('admin/drugs/'.$request->input('drug_name'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function show(measurement $measurement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function edit(measurement $measurement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $measure = measurement::find($id);
       
      $measure->name =  $request->input('measurment');
      $measure->save();
      return Redirect::back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $measure = measurement::destroy($id);
      return Redirect::back();
        }
}
