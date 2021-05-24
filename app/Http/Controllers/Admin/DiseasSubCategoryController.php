<?php

namespace App\Http\Controllers\Admin;

use App\Models\diseasSubCategory;
use App\Models\diseasCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiseasSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diseasCategory= diseasCategory::all();
        $diseasSubCategory=  diseasSubCategory::all();
        return view('admin.diseasSubCategory.index',['subCategorys'=> $diseasSubCategory, "categorys"=> $diseasCategory]);
  
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
        $category = new diseasSubCategory();
        $category->id =$request->code;
        $category->sub_category_name =$request->sub_category;
        $category->category_code =$request->category_id;  
        $category->save();
        return redirect("admin/diseasSubCategory")->with('success', 'Diseas SubCategory   '. $category->sub_category_name .'   Created Sucessfully');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\diseasSubCategory  $diseasSubCategory
     * @return \Illuminate\Http\Response
     */
    public function show(diseasSubCategory $diseasSubCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\diseasSubCategory  $diseasSubCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(diseasSubCategory $diseasSubCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\diseasSubCategory  $diseasSubCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, diseasSubCategory $diseasSubCategory)
    {
        $category= diseasSubCategory::find($diseasSubCategory->id);
   
        $category->id =$request->e_code;
        $category->sub_category_name =$request->e_category;
        $category->category_code =$request->e_category_id;  
        $category->save();
        return redirect("admin/diseasSubCategory")->with('success', 'Diseaas SubCategory  '. $category->category_name .'   Updated Sucessfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\diseasSubCategory  $diseasSubCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(diseasSubCategory $diseasSubCategory)
    {
        $category = diseasSubCategory::find($diseasSubCategory->id);
        $name = $category->sub_category_name;
        $category->delete();
       return redirect('/admin/diseasSubCategory')->with('success', 'Diseaas SubCategory  '. $name .'  Deleted Sucessfully');
    
    }
}
