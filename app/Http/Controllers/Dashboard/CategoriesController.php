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

    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->all());

        return redirect()->route('categories.index');
    }

    public function edit(Category $category)
    {
        return view('dashboard.categories.edit', compact('category'));
    }


    public function update(UpdateCategoryRequest $request, Category $category)
    {

        $data = $request->all();
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
