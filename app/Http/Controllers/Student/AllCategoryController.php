<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllCategoryController extends Controller
{
    public function index()
    {
        return view('pages.user.allCategory');
    }
}
