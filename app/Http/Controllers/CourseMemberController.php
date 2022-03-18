<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Course_member;

class CourseMemberController extends Controller
{
    public function index(Course $course)
    {
        return view('members.course.index', [
            'title'     => $course->course_name . ' Dashboard',
            'data'      => Course_member::where('user_id', auth()->user()->id)->where('course_id', $course->id)->first()
        ]);
    }

    public function register(Course $course)
    {
        if (auth()->user()->profile) {

            return view('members.course.register', [
                'title'     => 'Registrasi ' . $course->course_name,
                'course'    => $course
            ]);
        } else {
            return redirect('/profil')->with('message', 'Profile empty');
        }
    }

    public function submit(Course $course, Request $request)
    {
        $validated = $request->validate([
            'name'              => 'required|max:255',
            'email'             => 'required|email:dns|max:255',
            'university'        => 'required|max:255',
            'major'             => 'required|max:255',
            'student_number'    => 'required|max:255',
            'batch'             => 'required|min:4|max:4',
            'classes'           => 'nullable',
            'krsm'              => 'required|max:2048|mimes:pdf',
        ]);

        $validated['krsm'] = $validated['student_number'] . '_KRSM.' . $request->krsm->extension();
        $request->krsm->move(public_path('files/krsm'), $validated['krsm']);

        Course_member::create([
            'user_id'   => auth()->user()->id,
            'course_id' => $course->id,
            'classes'   => $validated['classes'],
            'krsm'      => $validated['krsm']
        ]);

        return redirect("$course->slug");
    }
}
