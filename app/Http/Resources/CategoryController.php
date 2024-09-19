<?php

namespace App\Http\Resources;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:categories',
            'description' => 'nullable|string',
        ]);

        Category::create($validatedData);

        // Redirect to the categories list with a success message
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function edit($categoryId) {

    }

    public function update(Request $request, $categoryId) {

    }

    public function destroy($categoryId) {

    }
    
  

}
