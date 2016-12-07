<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{

    /**
     * Shows the contact view.
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);

        return view('courses.show', compact('course'));
    }
}
