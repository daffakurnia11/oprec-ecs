<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('members.dashboard', [
            'title'     => 'Dashboard',
            'courses'   => Course::all()
        ]);
    }

    public function profile()
    {
        return view('members.profile', [
            'title'     => 'Edit Profil'
        ]);
    }

    public function profile_update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name'              => 'required|max:255',
            'email'             => 'required|email:dns|max:255',
            'photo'             => 'nullable|max:2048|mimes:png,jpg,jpeg',
            'university'        => 'required|max:255',
            'major'             => 'required|max:255',
            'student_number'    => 'required|max:255',
            'batch'             => 'required|min:4|max:4',
            'line_id'           => 'nullable|max:255',
            'whatsapp'          => 'required|max:13'
        ]);

        $user->update($validated);
        $validated['user_id'] = auth()->user()->id;
        $profile = Profile::firstWhere('user_id', $validated['user_id']);

        if ($request->hasFile('photo')) {
            if ($profile->photo) {
                unlink(public_path('img/photo_profile/' . $profile->photo));
            }
            $filename = $validated['name'] . '_photo.' . $validated['photo']->extension();
            $validated['photo'] = $filename;
            $request->photo->move(public_path('img/photo_profile'), $filename);
        }
        if ($profile) {
            $profile->update($validated);
        } else {
            Profile::create($validated);
        }

        return back()->with('message', 'Profile updated');
    }
}
