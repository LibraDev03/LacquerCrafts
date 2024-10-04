<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cates = Category::orderBy('name' , 'ASC')->get();
        return view('admin.product.create', compact('cates'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|unique:products,name',
        'slug'=> 'nullable',
        'price' => 'required|numeric',
        'weight' => 'nullable',
        'dimensions' => 'nullable',
        'description' => 'required|max:500',
        'category_id' => 'required|exists:categories,id',
        'image' => 'required|mimes:jpg,jpeg,png,gif,webp'
        ]);

        $data = $request->only('name','price','weight','dimensions','description','category_id');

        // Tạo slug từ tên sản phẩm
        $data['slug'] = Str::slug($request->name);
        // dd($data);

        $img_name = $request->image->hashName();
        $request->image->move(public_path('assets/images/product'), $img_name);
        $data['image']  = $img_name;

        // dd($data);

        Product::create($data);

        return redirect()->route('product.index')->with('suc', 'Thêm mới sản phẩm thành công');

   

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
        $products = Product::find($id);
        $cates = Category::orderBy('name' , 'ASC')->get();
        return view('admin.product.edit', compact('products', 'cates'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $data = $request->validate([
            'name' => 'required|unique:products,name',
            'slug'=> 'nullable',
            'price' => 'required|numeric',
            'weight' => 'nullable',
            'dimensions' => 'nullable',
            'description' => 'required|max:500',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|mimes:jpg,jpeg,png,gif,webp'
        ]);

        $data = $request->only('name','price','weight','dimensions','description','category_id');

        if ($request->hasFile('image')) {
            // Xóa ảnh cũ nếu có
            if ($product->image) {
                $oldImagePath = public_path('assets/images/product/' . $product->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Xóa ảnh cũ
                }
            }
            
            $img_name = $request->image->hashName();
            $request->image->move(public_path('assets/images/product'), $img_name);
            $data['image'] = $img_name; // Cập nhật tên ảnh mới
        } else {
            // Nếu không có ảnh mới, giữ lại tên ảnh cũ
            $data['image'] = $product->image;
        }

        if($product->update($data)) {
            return redirect()->route('product.index')->with('suc', 'sửa sản phẩm thành công');
        }else{
            return redirect()->back()->with('fail', 'Sửa sản phẩm không thành công');
        }
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Tìm sản phẩm theo ID
        $product = Product::findOrFail($id); // Sử dụng findOrFail để xử lý trường hợp không tìm thấy sản phẩm
        
        // Kiểm tra xem sản phẩm có ảnh không và xóa ảnh
        if ($product->image) {
            $imagePath = public_path('assets/img/product/' . $product->image);
            
            // Kiểm tra xem tệp tin có tồn tại trước khi xóa
            if (file_exists($imagePath)) {
                unlink($imagePath); // Xóa ảnh khỏi thư mục
            }
        }

        // Xóa sản phẩm khỏi cơ sở dữ liệu
        $product->delete();

        // Chuyển hướng về trang danh sách sản phẩm
        return redirect()->route('product.index')->with('suc', 'Xóa sản phẩm thành công');
    }

}
