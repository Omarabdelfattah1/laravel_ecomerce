<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::all();
        return view('dashboard.categories.index')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }
    public function store(Request $request)
    {
        Category::create($request->except('_token'));

        return redirect()->route('categories.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $category=Category::find($id);
        $categoryategory->update($request->except('_token'));

        return redirect()->route('categories.index');
    }
    public function show($id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();

        return redirect()->route('categories.index');
    }

    // public function subCategories(Request $request){
    //         $subcategories=Category::find($request->id)->sub_categories;
    //         $res="";
    //         foreach($subcategories as $category)
    //         {
    //             $res+="<option value='".$category->id."'>".$category->name."</option>";
    //         };
    //         return $res;
    // }
}
