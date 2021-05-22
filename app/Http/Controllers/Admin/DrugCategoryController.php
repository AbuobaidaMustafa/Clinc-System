<?php

namespace App\Http\Controllers\Admin;

use App\Models\drugCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DrugCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $drugCategory=  drugCategory::all();
        return view('admin.drugCategory.index')->with('categorys', $drugCategory);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd("aaaaa");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $category = new drugCategory();
        $category->id =$request->code;
        $category->category_name =$request->category;
        $category->save();
        return redirect("admin/drugCategory")->with('success', 'Category   '. $category->category_name .'   Created Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\drugCategory  $drugCategory
     * @return \Illuminate\Http\Response
     */
    public function show(drugCategory $drugCategory)
    {
     dd("aaa");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\drugCategory  $drugCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(drugCategory $drugCategory)
    {
        dd("aaa");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\drugCategory  $drugCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, drugCategory $drugCategory)
    {
        $category= drugCategory::find($drugCategory->id);
   
        $category->id =$request->code;
        $category->category_name =$request->category;
        $category->save();
        return redirect("admin/drugCategory")->with('success', 'Category  '. $category->category_name .'   Updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\drugCategory  $drugCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(drugCategory $drugCategory)
    {
      
        $category = drugCategory::find($drugCategory->id);
        $name = $category->category;
        $category->delete();
       return redirect('/admin/drugCategory')->with('success', 'Category  '. $name .'  Deleted Sucessfully');
    }
}
