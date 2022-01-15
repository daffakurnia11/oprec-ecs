<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Applicant_choice;
use App\Models\Applicant_file;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $open = Carbon::create(2022, 1, 17, 12, 0, 0);
        $closed = Carbon::create(2022, 1, 23, 23, 59, 59);
        $timenow = Carbon::now();

        if ($timenow->greaterThan($open) && $timenow->lessThan($closed)) {
            return view('oprec-info.open');
        } elseif ($timenow->greaterThan($closed)) {
            return view('oprec-info.closed');
        } else {
            return view('oprec-info.soon');
        }
    }

    public function registration()
    {
        $open = Carbon::create(2022, 1, 17, 12, 0, 0);
        $closed = Carbon::create(2022, 1, 23, 23, 59, 59);
        $timenow = Carbon::now();

        if ($timenow->greaterThan($open) && $timenow->lessThan($closed)) {
            return view('form');
        } else {
            return view('oprec-info.soon');
        }
    }

    public function submittion(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required',
            'number'        => 'required|unique:applicants',
            'email'         => 'required|email:dns|unique:applicants',
            'line_id'       => 'required|alpha_dash|unique:applicants',
            'whatsapp'      => 'required|numeric|digits_between:10,13|unique:applicants',
            'first_choice'  => 'required|different:second_choice',
            'first_reason'  => 'required',
            'second_choice' => 'required|different:first_choice',
            'second_reason' => 'required',
            'essay'         => 'required|mimes:pdf|max:5120',
            'cv'            => 'required|mimes:pdf|max:5120',
            'mbti'          => 'required|mimes:pdf|max:5120',
            'motlet'        => 'required|mimes:pdf|max:5120',
            'commitment'    => 'required|mimes:pdf|max:5120',
        ]);

        if ($request->hasFile('essay') && $request->hasFile('cv') && $request->hasFile('mbti') && $request->hasFile('motlet') && $request->hasFile('commitment')) {
            $essayFile = $validated['number'] . '_Essay.' . $request->essay->extension();
            $request->essay->move(public_path('files/essay'), $essayFile);

            $cvFile = $validated['number'] . '_CV.' . $request->cv->extension();
            $request->cv->move(public_path('files/cv'), $cvFile);

            $mbtiFile = $validated['number'] . '_MBTI.' . $request->mbti->extension();
            $request->mbti->move(public_path('files/mbti'), $mbtiFile);

            $motletFile = $validated['number'] . '_Motlet.' . $request->motlet->extension();
            $request->motlet->move(public_path('files/motlet'), $motletFile);

            $commitmentFile = $validated['number'] . '_Commitment.' . $request->commitment->extension();
            $request->commitment->move(public_path('files/commitment'), $commitmentFile);

            $foreignId = Applicant::create([
                'name'          => $validated['name'],
                'number'        => $validated['number'],
                'email'         => $validated['email'],
                'line_id'       => $validated['line_id'],
                'whatsapp'      => $validated['whatsapp'],
            ])->id;
            Applicant_choice::create([
                'applicant_id'  => $foreignId,
                'first_choice'  => $validated['first_choice'],
                'first_reason'  => $validated['first_reason'],
                'second_choice' => $validated['second_choice'],
                'second_reason' => $validated['second_reason'],
            ]);
            Applicant_file::create([
                'applicant_id'  => $foreignId,
                'essay'         => $essayFile,
                'cv'            => $cvFile,
                'mbti'          => $mbtiFile,
                'motlet'        => $motletFile,
                'commitment'    => $commitmentFile,
            ]);
            return redirect('/')->with('message', 'Submitted');
        }
    }
}
