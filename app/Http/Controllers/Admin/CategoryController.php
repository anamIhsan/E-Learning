<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category; 
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('pages.admin.category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $image_file = $this->uploadImage($request->file('photo_file'));

        $request->merge([
            'photo' => $image_file
        ]);
        
        Category::create($request->all());
        return redirect()->route('admin-dashboard-category')->with('notification-success', 'Data berhasil di buat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::findOrFail($id);

        return view('pages.admin.category.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $data = Category::findOrFail($id);

        if($request->file('photo_file') == null){
            $request->merge([
                'photo' => $data->photo
            ]);
        }else {
            $this->removeImage($data->photo);
            $image_file = $this->uploadImage($request->photo_file);
            $request->merge([
                'photo' => $image_file
            ]);
        }

        $data->update($request->all());
        return redirect()->route('admin-dashboard-category')->with('notification-success', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Category::findOrFail($id);
        $this->removeImage($data->photo);
        $data->delete();
        return back()->with('notification-delete', 'Data berhasil di hapus');
    }
    
    //mengupload gambar
    public function uploadImage($image)
    {
        $new_name_image =time() . '.'. $image->getClientOriginalExtension();
        $image->move(public_path('profile'), $new_name_image);
        return $new_name_image;
        
    }
    
    //unlink buat menghapus file
    public function removeImage($image)
    {   
        if (file_exists('profile/'. $image)){
        unlink('profile/'. $image);
        }
    }
}
