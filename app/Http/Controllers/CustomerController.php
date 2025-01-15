<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::orderBy('id' ,'desc')->paginate();
        return view("admin.customer.index", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = User::findOrFail($id); // Lấy dữ liệu người dùng
        $roles = ['customer', 'admin']; // Danh sách các roles
        
        return view("admin.customer.edit", compact("data", "roles"));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            "name" => "required|unique:users,name,$id",
            "email" => "required|email|unique:users,email,$id",
            "phone" => "nullable|max:10",
            "address" => "nullable",
            "role"=> "required|in:customer,admin",
        ] ;
        $messages = [
            'name.required' => 'Tên không được để trống!',
            'name.unique' => 'Tên đã tồn tại!',
            'email.required' => 'Email không được để trống!',
            'email.email' => 'Email không đúng định dạng!',
            'email.unique' => 'Email đã tồn tại!',
            'phone.max' => 'Số điện thoại không được vượt quá 10 ký tự!',
            'role.required' => 'Vai trò không được để trống!',
            'role.in' => 'Vai trò không hợp lệ! Chỉ chấp nhận: customer, admin.',
        ] ;

        $request->validate($rules, $messages);
        // dd($request->all());

        // Tìm sản phẩm để cập nhật
        $customer = User::findOrFail($id);

        $data = $request->only('name','email','phone','address','role',) ;

        // Xử lý hình ảnh
    if ($request->hasFile('image')) {
        // Xóa ảnh cũ nếu tồn tại
        if (!empty($customer->images) && file_exists(public_path('upload/admin/' . $customer->images))) {
            unlink(public_path('upload/admin/' . $customer->images));
        }

            // Upload ảnh mới
            $file = $request->file('image');
            $file_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('upload/admin'), $file_name);
            $data['images'] = $file_name;
        }

        $customer->update($data);

        return redirect()->route('customer.index')->with('success','Cập nhập thông tin thanh công !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer= User::findOrFail($id);

        // Xóa Ảnh
        if ($customer->image) {
            unlink(public_path('upload/admin' . $customer->image));
        }

        $customer->delete();
        return redirect()->route('customer.index')->with('success','Xóa thông tin thàành công !');
    }
}
