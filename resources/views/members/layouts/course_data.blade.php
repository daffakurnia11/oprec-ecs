<div class="card rounded shadow-sm mb-3">
  <div class="card-body">
    <div class="ratio ratio-1x1 mx-auto" style="max-width: 200px">
      <img src="/img/{{ isset(auth()->user()->profile->photo) ? 'photo_profile/' . auth()->user()->profile->photo : 'profile.svg' }}" class="img-thumbnail rounded-circle d-block mx-auto">
    </div>
    <h1 class="fs-4 mt-3 mb-0 text-center">{{ auth()->user()->name }}</h1>

    @if (isset(auth()->user()->profile->student_number))
    <p class="fs-6 text-center my-0">{{ auth()->user()->profile->student_number }}</p>
    @endif
    <a href="/profil" class="fs-6 d-block text-center mt-0">Edit profil</a>

    <div class="mt-3">
      <p class="mx-0 mx-sm-3 mb-2 d-flex align-items-center">
        <i class="fs-5 d-block me-2 bi bi-envelope"></i>
        <span>{{ auth()->user()->email }}</span>
      </p>
      @if (auth()->user()->roles == 'Member')
      <p class="mx-0 mx-sm-3 mb-2 d-flex align-items-center">
        <i class="fs-5 d-block me-2 bi bi-building"></i>
        <span>{{ 'Kelas ' . $data->classes ?: '-' }}</span>
      </p>
      @else
      <p class="mx-0 mx-sm-3 mb-2 d-flex align-items-center">
        <i class="fs-5 d-block me-2 bi bi-building"></i>
        <span>{{ auth()->user()->roles }}</span>
      </p>
      @endif
      {{-- <p class="mx-0 mx-sm-3 mb-2 d-flex align-items-center">
        <i class="fs-5 d-block me-2 bi bi-people-fill"></i>
        <span>{{ isset(auth()->user()->course_member->course_group->group) ? 'Kelompok ' . auth()->user()->course_member->course_group->group : 'Belum ada kelompok' }}</span>
      </p>
      <p class="mx-0 mx-sm-3 mb-2 d-flex align-items-center">
        <i class="fs-5 d-block me-2 bi bi-person-check-fill"></i>
        <span>{{ isset(auth()->user()->course_member->course_group->user->name) ? auth()->user()->course_member->course_group->user->name : 'Belum ada asisten' }}</span>
      </p> --}}
    </div>
  </div>
</div>