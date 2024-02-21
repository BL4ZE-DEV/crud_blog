<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Exception;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories = Category::all();
        $categories = Category::latest()->paginate(10);

        return response()->json([
            'status' => true,
            'message' => 'Categories fetched successfully!',
            'data' => $categories
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {

        $category = Category::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Category created successfully!',
            'data' => $category
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {

        // $category = Category::whereId($id)->first();
        try{
            return response()->json([
                'status' => true,
                'message' => 'Category created successfully!',
                'data' => $category
            ]);
        } catch(\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong'. $e->getMessage()
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        // Category::whereId($id)->update([]);
        // ?: ?? 

        $category->update([
            'name' => $request->name ?? $category->name,
            'description' => $request->description ?? $category->description,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Category has been updated successfully!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if($category->delete()){
            return response()->json([
                'status' => true,
                'message' => 'Category has been deleted successfully!'
            ]);
        }
    }
}
