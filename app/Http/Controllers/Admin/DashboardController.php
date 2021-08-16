<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\Course;
use App\Models\Video;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $student = User::where('roles', 'USER')->get();
        $category = Category::count();
        $course = Course::count();
        $video = Video::count();

        return view('pages.admin.dashboard', [
            'student' => $student,
            'category' => $category,
            'course' => $course,
            'video' => $video
        ]);
    }
}
