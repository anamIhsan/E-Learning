<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id)
    {
        $categories = Category::all();
        $course = Course::where('categories_id', $id)->get();
        $category = Category::find($id);
        
        return view('pages.user.category', [
            'course' => $course,
            'categories' => $categories,
            'category' => $category
        ]);
    }
}
