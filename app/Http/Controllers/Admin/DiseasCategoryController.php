<?php

namespace App\Http\Controllers\Admin;

use App\Models\diseasCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiseasCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        $diseasCategory=  diseasCategory::all();
        return view('admin.diseasCategory.index')->with('categorys', $diseasCategory);
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
        $category = new diseasCategory();
        $category->id =$request->code;
        $category->category_name =$request->category;
        $category->save();
        return redirect("admin/diseasCategory")->with('success', 'Diseas Category   '. $category->category_name .'   Created Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\diseasCategory  $diseasCategory
     * @return \Illuminate\Http\Response
     */
    public function show(diseasCategory $diseasCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\diseasCategory  $diseasCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(diseasCategory $diseasCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\diseasCategory  $diseasCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, diseasCategory $diseasCategory)
    {
        $category= diseasCategory::find($diseasCategory->id);
   
        $category->id =$request->code;
        $category->category_name =$request->category;
        $category->save();
        return redirect("admin/diseasCategory")->with('success', 'Diseas Category  '. $category->category_name .'   Updated Sucessfully');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\diseasCategory  $diseasCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(diseasCategory $diseasCategory)
    {
        $category = diseasCategory::find($diseasCategory->id);
        $name = $category->category;
        $category->delete();
       return redirect('/admin/diseasCategory')->with('success', 'Diseas Category  '. $name .'  Deleted Sucessfully');
    }
}
