@extends('members.layouts.main')

@section('content')
    
<!--start content-->
<main id="dashboard">
  <div class="container py-3">
    <div class="row">
      <div class="col-xl-3 col-lg-4">
        @include('members.layouts.profile_data')
      </div>
      <div class="col-xl-9 col-lg-8">
        <div class="card rounded shadow-sm">
          <div class="card-body">

            @if(session()->has('message') && session('message') == 'Regis Closed')
            <div class="alert alert-danger alert-dismissible fade show radius-30 ps-4" role="alert">
              Registrasi ditutup! Silakan hubungi Contact Person.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="row">

              @foreach ($courses as $course)
              <div class="col-xl-4 col-sm-6">
                <div class="card mx-auto mb-3">
                  <div class="card-body">
                    <h5 class="card-title">{{ $course->course_name }}</h5>
                    <p class="card-text">{{ $course->desc }}</p>

                    @if (auth()->user()->roles != 'Member')
                      <a href="{{ $course->slug }}" class="btn btn-success d-block ms-auto card-link">Dashboard</a>
                    @else
                      @if ((App\Models\Course_member::where('user_id', auth()->user()->id)->where('course_id', $course->id)->get())->isNotEmpty())
                        <a href="{{ $course->slug }}" class="btn btn-success d-block ms-auto card-link">Dashboard</a>
                      @else
                        <a href="{{ $course->slug }}/registrasi" class="btn btn-primary d-block ms-auto card-link">Registrasi</a>
                      @endif
                    @endif

                    <a href="{{ $course->contact }}" class="mt-2 d-block text-center">Contact Person</a>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!--end page main-->

@endsection