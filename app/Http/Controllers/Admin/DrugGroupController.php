<?php

namespace App\Http\Controllers\Admin;

use App\Models\drugGroup;
use App\Models\drugSubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DrugGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drugGroup= drugGroup::all();
        $drugSubCategory=  drugSubCategory::all();
        // dd($drugSubCategory);
        return view('admin.drugGroup.index',['subCategorys'=> $drugSubCategory, "categorys"=> $drugGroup]);    }

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
        $group = new drugGroup();
        $group->id =$request->code;
        $group->group_name =$request->group_name;
        $group->subcat_code =$request->subcat_id;  
        $group->save();
        return redirect("admin/drugGroup")->with('success', 'Drug Group   '. $group->group_name .'   Created Sucessfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\drugGroup  $drugGroup
     * @return \Illuminate\Http\Response
     */
    public function show(drugGroup $drugGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\drugGroup  $drugGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(drugGroup $drugGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\drugGroup  $drugGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, drugGroup $drugGroup)
    {
        $category= drugGroup::find($drugGroup->id);
   
        $category->id =$request->e_code;
        $category->group_name =$request->e_group_name;
        $category->subcat_code =$request->e_subcat_id;  
        $category->save();
        return redirect("admin/drugGroup")->with('success', 'Drup Group  '. $category->e_group_name .'   Updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\drugGroup  $drugGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(drugGroup $drugGroup)
    {
        $category = drugGroup::find($drugGroup->id);
        $name = $category->group_name;
        $category->delete();
       return redirect('/admin/drugGroup')->with('success', 'Drug Group  '. $name .'  Deleted Sucessfully');
    }
}
