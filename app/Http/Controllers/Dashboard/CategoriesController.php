<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.categories.index')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->except("_token"));


        return redirect()->route('categories.index');
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {

        $data = $request->except('_method','_token');
        $category->update($data);

        return redirect()->route('categories.index');
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index');
    }

    public function subCategories($id)
    {
        return ["subcategories" => Category::find($id)->sub_categories];
    }
}
