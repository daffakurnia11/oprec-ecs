@extends('members.layouts.main')

@section('content')
    
<!--start content-->
<main id="dashboard">
  <div class="container py-3">
    <div class="row">
      <div class="col-xl-3 col-lg-4">
        @include('members.layouts.course_data')
      </div>
      <div class="col-xl-9 col-lg-8">
        <div class="card rounded shadow-sm py-2 px-3">
          <div class="card-body">
            <ul class="nav nav-tabs nav-fill">
              <li class="nav-item">
                <a class="nav-link active" href="#">Pengumuman</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Berkas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Jadwal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kelompok</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!--end page main-->

@endsection