<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\drug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DrugsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drugs = Drug::all();
        return view('admin.drugs.index',['drugs'=> $drugs]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $drugs = Drug::all();
        return view('admin.drugs.create');

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
     * @param  \App\Models\drug  $drugs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $drugs = Drug::find($id);
        $measurements =  Drug::find($id)->measurements()->get();

        return view('admin.drugs.show',['drugs'=>$drugs ,'measurments'=>$measurements]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\drug  $drugs
     * @return \Illuminate\Http\Response
     */
    public function edit(drug $drugs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\drug  $drugs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $drug = Drug::find($id);
       
      $drug->name =  $request->input('name');
      $drug->save();
      return redirect('admin/drugs/'.$id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\drug  $drugs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drug = drug::destroy($id);
      return Redirect::back();
    }
    

}
