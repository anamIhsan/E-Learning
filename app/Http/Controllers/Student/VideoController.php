<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Chapter;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index($id)
    {
        $categories = Category::all();
        $chapters = Chapter::find($id);
        $video = Video::where('chapters_id', $id)->get();

        return view('pages.user.video', [
            'chapters' => $chapters,
            'video' => $video,
            'categories' => $categories,
        ]);
    }
}
