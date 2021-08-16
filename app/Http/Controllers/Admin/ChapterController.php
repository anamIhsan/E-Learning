<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ChapterRequest;
use App\Models\Chapter;
use App\Models\Course;
use App\Models\Video;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($url)
    {
        $course = Course::find($url);
        $chapter = Chapter::where('courses_id', $url)->get();
        $videos = Video::get();
        
        return view('pages.admin.course.detail', [
            'chapter' => $chapter,
            'videos' => $videos,
            'course' => $course,
            'url' => $url
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($course)
    {
        $course = Course::findOrFail($course);

        return view('pages.admin.course.chapter.create', [
            'course' => $course
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChapterRequest $request, $id)
    {
        $course = Course::find($id);
        // $courses = $request->all();

        Chapter::create($request->all());
        return redirect()->route('admin-dashboard-course-detail', ['id'=>$id])->with('notification-success', 'Chapter berhasil di buat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        $chapters = Chapter::findOrFail($id);

        return view('pages.admin.course.chapter.edit', [
            'chapters' => $chapters
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChapterRequest $request, $id)
    {
        $course = Course::find($id);
        $data = Chapter::findOrFail($id);

        $data->update($request->all());

        return redirect()->route('admin-dashboard-course-detail', $data->course->id )->with('notification-success', 'Chapter berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Chapter::findOrFail($id);

        $data->video()->delete();
        $data->delete();

        return back()->with('notification-delete', 'Chapter berhasil di hapus');
    }
}
