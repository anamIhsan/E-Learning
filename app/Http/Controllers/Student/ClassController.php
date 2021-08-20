<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Chapter;
use App\Models\Course;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index($id)
    {
        $categories = Category::all();
        $chapters = Chapter::all();
        $courses = Course::all()->find($id);

        return view('pages.user.class', [
            'categories' => $categories,
            'courses' => $courses,
            'chapters' => $chapters
        ]);
    }
}
