@extends('admin.layouts.main')

@section('content')
    
  <!--breadcrumb-->
  <div class="page-breadcrumb d-flex align-items-center flex-column flex-md-row mb-3">
    <div class="breadcrumb-title pe-3 border-0">Pendaftar {{ $course->course_name }}</div>
    <div class="ms-md-auto me-md-0 mx-auto ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-people-fill"></i> Pendaftar</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->

  <h6 class="mb-0 text-uppercase">Data Pendaftar</h6>
  <hr>
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NRP</th>
              <th>Kelas</th>
              <th>Kelompok</th>
              <th>Asisten</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($members as $member)
            <tr>
              <td class="text-center">{{ $loop->iteration }}</td>
              <td>{{ $member->user->name }}</td>
              <td class="text-center">{{ $member->user->profile->student_number }}</td>
              <td class="text-center">{{ $member->classes }}</td>
              <td class="text-center">{{ $member->course_group->num_group }}</td>
              <td>{{ $member->course_group->user->name }}</td>
              <td>$320,800</td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NRP</th>
              <th>Kelas</th>
              <th>Kelompok</th>
              <th>Asisten</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
@endsection