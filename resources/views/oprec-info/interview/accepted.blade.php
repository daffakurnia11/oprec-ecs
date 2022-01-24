@extends('layouts.main')

@section('content')

<section id="announce">
  <div class="container">
    <div class="announce mx-auto" data-aos="zoom-in">
      <div class="text-center">
        <img src="/img/kingsman-logo.png" class="kingsman-logo" alt="">
      </div>
      <p>Dear, {{ $applicant_interview->number }}</p>
      <p class="text-center">Congratulation, you can proceed to the next step:</p>
      <h1 class="text-center">Interview</h1>
      <p class="text-center">
        Prepare your best project related to your division choice to be presented on this interview.<br>
        Our meeting will take place on:
      </p>
      <h2 class="text-center">
        {{ $applicant_interview->date_schedule }}<br>
        {{ $applicant_interview->time_schedule }}
      </h2>
      @if ($applicant_interview->attend == TRUE)
      <p class="text-center mt-5">{{ $applicant_interview->applicant->name }} has been attended the Interview!</p>          
      @else
      <form action="/Announcement/{{ $applicant_interview->number }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-check mt-4">
          <input class="form-check-input" type="checkbox" name="attend" id="attend">
          <label class="form-check-label" for="attend">
            I committed to attend the interview as scheduled. All consequences will be my responsibility if I do not attend the interview.
          </label>
        </div>
          <button type="submit" class="announce-button mx-auto my-4">Attend the Interview!</button>
      </form>
      @endif
    </div>
  </div>
  <img src="/img/comingsoon-pict.png" class="announce-bg" alt="">
</section>

@endsection
