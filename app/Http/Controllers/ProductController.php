<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search'); // Lấy từ khóa tìm kiếm
        $query = Product::query();

        if (!empty($search)) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%');
        }

        $data = $query->orderBy('id', 'DESC')->paginate(10);
        return view('admin.product.index', compact('data', 'search'));
        // $data = Product::orderBy('id', 'DESC')->paginate();
        // return view('admin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::orderBy('name', 'ASC')->paginate();
        return view('admin.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|unique:products|min:3|max:255',
            'price' => 'required|numeric|min:0',
            'sale' => 'nullable|numeric|min:0|max:100',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,webp',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|boolean'
        ];

        $messages = [
            'name.required' => 'Tên sản phẩm không được để trống!',
            'name.unique' => 'Tên sản phẩm đã tồn tại!',
            'price.required' => 'Giá sản phẩm không được để trống!',
            'price.numeric' => 'Giá sản phẩm phải là số!',
            'sale.numeric' => 'Phần trăm giảm giá phải là số!',
            'image.required' => 'Ảnh sản phẩm không được để trống!',
            'image.mimes' => 'Ảnh sản phẩm phải có định dạng jpeg, png, jpg, gif, hoặc webp!',
            'category_id.required' => 'Danh mục sản phẩm không được để trống!',
            'category_id.exists' => 'Danh mục không hợp lệ!',
            'status.required' => 'Trạng thái không được để trống!',
        ];

        $request->validate($rules, $messages);
        //Hàm validate() kiểm tra dữ liệu nhập vào dựa trên $rules và hiển thị thông báo lỗi dựa trên $messages
        $data = $request->only('name', 'price', 'sale', 'description', 'category_id', 'status');
        //only() giúp giới hạn các dữ liệu cần lấy để tránh lấy nhầm các trường không cần thiết.

        $file_name = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->hashName(); // Tạo tên file duy nhất
            $file->move(public_path('upload'), $file_name); // Di chuyển file vào thư mục upload
        }



        $data['image'] = $file_name; // Lưu tên ảnh vào cơ sở dữ liệu
        // Tạo sản phẩm và chuyển hướng
        if (Product::create($data)) {
            return redirect()->route('product.index')->with('success', 'Tạo sản phẩm thành công!');
        }

        return redirect()->back()->withInput()->with('error', 'Tạo sản phẩm thất bại!');
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
        // Tìm sản phẩm theo id
        $data = Product::findOrFail($id);
        // Lấy danh sách các danh mục
        $category = Category::orderBy('name', 'ASC')->get();
        // Trả về view với dữ liệu sản phẩm và danh mục
        return view('admin.product.edit', compact('data', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $rules = [
            'name' => 'required|unique:products,id|max:255',
            'price' => 'required|numeric|min:0',
            'sale' => 'nullable|numeric|min:0|max:100',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,webp',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|boolean'
        ];

        $messages = [
            'name.required' => 'Tên sản phẩm không được để trống!',
            'price.required' => 'Giá sản phẩm không được để trống!',
            'image.mimes' => 'Ảnh sản phẩm phải có định dạng jpeg, png, jpg, gif, hoặc webp!',
        ];

        $request->validate($rules, $messages);

        // Tìm sản phẩm để cập nhật
        $product = Product::findOrFail($id);

        // Cập nhật thông tin
        $data = $request->only('name', 'price', 'sale', 'description', 'category_id', 'status');

        // Nếu có ảnh mới được tải lên
        if ($request->hasFile('image')) {
            // Xóa hình ảnh cũ
            if ($product->image) {
                unlink(public_path('upload/' . $product->image));
            }

            // Lưu ảnh mới
            $file = $request->file('image');
            $file_name = $file->hashName();
            $file->move(public_path('upload/'), $file_name);
            $data['image'] = $file_name;
        } else {
            //Giữ lại ảnh cũ nếu không có ảnh mới
            $data['image'] = $product->image;
        }

        $product->update($data);

        return redirect()->route('product.index')->with('success', 'Cập nhật sản phẩm thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        // Xóa Ảnh
        if ($product->image) {
            unlink(public_path('upload/' . $product->image));
        }

        // Xóa sản phẩm
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Xóa sản phẩm thành công!');
    }
}
