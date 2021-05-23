<?php

namespace App\Http\Controllers\Admin;

use App\Models\drugSubCategory;
use App\Models\drugCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DrugSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drugCategory= drugCategory::all();
        $drugSubCategory=  drugSubCategory::all();
        // dd($drugSubCategory);
        return view('admin.drugSubCategory.index',['subCategorys'=> $drugSubCategory, "categorys"=> $drugCategory]);
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
        $category = new drugSubCategory();
        $category->id =$request->code;
        $category->sub_category_name =$request->sub_category;
        $category->category_code =$request->category_id;  
        $category->save();
        return redirect("admin/drugSubCategory")->with('success', 'Sub Category   '. $category->sub_category_name .'   Created Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\drugSubCategory  $drugSubCategory
     * @return \Illuminate\Http\Response
     */
    public function show(drugSubCategory $drugSubCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\drugSubCategory  $drugSubCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(drugSubCategory $drugSubCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\drugSubCategory  $drugSubCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, drugSubCategory $drugSubCategory)
    {
        $category= drugSubCategory::find($drugSubCategory->id);
   
        $category->id =$request->e_code;
        $category->sub_category_name =$request->e_category;
        $category->category_code =$request->e_category_id;  
        $category->save();
        return redirect("admin/drugSubCategory")->with('success', 'Sub Category  '. $category->category_name .'   Updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\drugSubCategory  $drugSubCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(drugSubCategory $drugSubCategory)
    {
        $category = drugSubCategory::find($drugSubCategory->id);
        $name = $category->sub_category_name;
        $category->delete();
       return redirect('/admin/drugSubCategory')->with('success', 'Sub Category  '. $name .'  Deleted Sucessfully');
    }
}
