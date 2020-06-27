<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
class SubCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= SubCategory::all();
        return view('dashboard.subCategories.index')
                    ->with('subCategories',$categories)
                    ->with('categories',Category::all());
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.subCategories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubCategoryRequest $request)
    {
        SubCategory::create($request->all());

        return redirect()->route('subcategories.index');
    }

    public function edit($id)
    {
        $sub_category = SubCategory::find($id);
        $categories = Category::all();
        return view('dashboard.subCategories.edit', compact( 'categories', 'sub_category'));
    }

    public function show()
    {
        return 'show';
    }

    public function update(UpdateSubCategoryRequest $request, $id)
    {
        $subCategory = SubCategory::find($id);
        $subCategory->update($request->all());
        return redirect()->route('subcategories.index');
    }


    public function destroy($id)
    {
        $subCategory = SubCategory::find($id);
        $subCategory->delete();
        return redirect()->route('subcategories.index');
    }
}
