<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $courses = Course::all();
        $course_splide = Course::take(3)->get();
        $categories = Category::all();

        return view('pages.user.home', [
            'courses' => $courses,
            'course_splide' => $course_splide,
            'categories' => $categories
        ]);
    }
}
