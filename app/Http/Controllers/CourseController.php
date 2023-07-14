<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\ViewFinderInterface;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses=Course::latest()->paginate(5);

       return view('admin.course.index',compact('courses'))
       ->with('i',(request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        Course::Create($request->all());
        return redirect()->route('course.index')->with('msg','Data Inserted Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('admin.course.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('admin.course.edit',compact('course'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $course->update($request->all());
        return redirect()->route('course.index')->with('msg','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index')->with('msg','Data Deleted Successfully');
    }
}
