<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CourseRequest;
use App\Models\Category;
use App\Models\Chapter;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        $users = Auth::user();

        return view('pages.admin.course.index', [
            'courses' => $courses,
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $users = Auth::user();

        return view('pages.admin.course.create', [
            'categories' => $categories,
            'users' => $users,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        $image_file = $this->uploadImage($request->file('thumbnail_file'));

        $request->merge([
            'thumbnail' => $image_file
        ]);

        Course::create($request->all());
        return redirect()->route('admin-dashboard-course')->with('notification-success', 'Course berhasil di buat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $url = action([ChapterController::class, 'index'], ['id' => $id]);
        
        return redirect($url);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Course::findOrFail($id);
        $categories = Category::all();
        $users = Auth::user();

        return view('pages.admin.course.edit', [
            'data' => $data,
            'categories' => $categories,
            'users' => $users,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseRequest $request, $id)
    {
        $data = Course::findOrFail($id);

        if($request->file('thumbnail_file') == null){
            $request->merge([
                'thumbnail' => $data->thumbnail
            ]);
        }else {
            $this->removeImage($data->thumbnail);
            $image_file = $this->uploadImage($request->thumbnail_file);
            $request->merge([
                'thumbnail' => $image_file
            ]);
        }

        $data->update($request->all());
        return redirect()->route('admin-dashboard-course')->with('notification-success', 'Course berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Course::find($id);

        $data->chapter()->delete();
        $this->removeImage($data->thumbnail);
        $data->delete();
        return back()->with('notification-delete', 'Course berhasil di hapus');
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
