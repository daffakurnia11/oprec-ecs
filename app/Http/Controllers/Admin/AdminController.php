<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'title'     => 'Welcome Admin!',
            'courses'   => Course::all()
        ]);
    }
}
