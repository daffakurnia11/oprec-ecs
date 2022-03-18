@extends('admin.layouts.main')

@section('content')
    
  <!--breadcrumb-->
  <div class="page-breadcrumb d-flex align-items-center flex-column flex-md-row mb-3">
    <div class="breadcrumb-title pe-3 border-0">Course Lists</div>
    <div class="ms-md-auto me-md-0 mx-auto ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i> Dashboard</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page"><i class="bi bi-book"></i> Course List</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->

  <h6 class="mb-0 text-uppercase">Course Lists</h6>
  <hr>

@endsection