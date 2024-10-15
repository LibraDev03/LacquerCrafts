<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = blog::all();
        return view('admin.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|unique:blogs',
            'description' => 'required|max:500',
            'image' => 'required|mimes:jpg,jpeg,png,gif,webp'
        ]);

        $data = $request->only('name','description');

        $image_name = $request->image->hashName();
        $request->image->move(public_path('assets/images/blog/s345'), $image_name);
        $data['image'] = $image_name;

        // dd($data);
        if(Blog::create($data)){
            return redirect()->route('blog.index')->with('suc','Đã thêm mới bài viết');
        }else{
            return redirect()->back()->with('fail','Lỗi thêm mới bài viết');
        }


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
        $blog = Blog::find($id);
        return view('admin.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::find($id);
        $data = $request->validate([
            'name' => 'required|unique:blogs',
            'description' => 'required|max:500',
            'image' => 'required|mimes:jpg,jpeg,png,gif,webp'
        ]);

        $data = $request->only('name', 'description');

        if($request->hasFile('image')) {

            if($blog->image) {
                $old_image = public_path('assets/images/blog/s345/' . $blog->image);
                if(file_exists('old_image')){
                    unlink('old_image');
                }
            }
            $img_name = $request->image->hashName();
            $request->image->move(public_path('assets/images/blog/s345'), $img_name);
            $data['image'] = $img_name; // Cập nhật tên ảnh mới
        }else {
            // Nếu không có ảnh mới, giữ lại tên ảnh cũ
            $data['image'] = $blog->image;
        }

        if($blog->update($data)) {
            return redirect()->route('blog.index')->with('suc', 'sửa bài viết thành công');
        }else{
            return redirect()->back()->with('fail', 'Sửa bài viết không thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog =Blog::find($id);
        
        if($blog->delete()) {
            return redirect()->back()->with('suc', 'xóa bài viết thành công');
        }else{
            return redirect()->back()->with('fail', 'xóa bài viết không thành công');
        }
    }
}
