<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\VideoRequest;
use App\Models\Chapter;
use App\Models\Course;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($chapters)
    {
        $chapters = Chapter::findOrFail($chapters);

        return view('pages.admin.course.video.create', [
            'chapters' => $chapters
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideoRequest $request, $id)
    {
        $chapters = Chapter::find($id);

        Video::create($request->all());

        return redirect()->route('admin-dashboard-course-detail', $chapters->course->id)->with('notification-success-video', 'Chapter berhasil di buat');
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
    public function edit($id, $course)
    {
        $videos = Video::findOrFail($id);

        return view('pages.admin.course.video.edit', [
            'videos' => $videos,
            'course' => $course
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VideoRequest $request, $id)
    {
        $chapter = Chapter::find($id);
        $data = Video::findOrFail($id);

        $data->update($request->all());

        return redirect()->route('admin-dashboard-course-detail', $data->chapter->course->id )->with('notification-success', 'Chapter berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Video::findOrFail($id);

        $data->delete();

        return back()->with('notification-delete', 'Video berhasil di hapus');
    }
}
