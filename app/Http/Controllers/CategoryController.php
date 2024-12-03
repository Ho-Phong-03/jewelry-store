<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Category::orderBy('id', 'DESC')->paginate();
        return view('admin.category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Category::orderBy('id', 'DESC')->paginate();
        return view('admin.category.create', compact('data'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|unique:categories',
        ];

        $messages = [
            'name.required' => 'The category name is required.', // Thông báo khi tên danh mục bị bỏ trống
            'name.unique' => 'The category name must be unique. This name already exists.', // Thông báo khi tên danh mục bị trùng
        ];

        $request->validate($rules, $messages);

        // Lưu danh mục vào database
        Category::create($request->all());

        return redirect()->route('category.index')->with('success', 'Thêm danh mục thành công!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Category::findOrFail($id);
        return view('admin.category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $rules = [
            'name' => 'required|max:255',
            'status' => 'required'
        ];

        $messages = [

        ];

        $data = $request->validate($rules, $messages);

        $category->update($data);

        return redirect()->route('category.index', $id)->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if($category->products()->count() == 0)
        {
            $category->delete();
            return redirect()->route('category.index');
        }
        return redirect()->route('category.index');
    }
}
