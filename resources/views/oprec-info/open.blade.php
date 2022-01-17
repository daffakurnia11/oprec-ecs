@extends('layouts.main')

@section('content')

<section id="info-oprec" class="d-flex align-items-center">
    <img src="/img/comingsoon-pict.png" class="oprec-bg" alt="">
    <img src="/img/ecs-logo.png" class="ecs-logo" alt="Logo ECS" data-aos="zoom-in"
        data-aos-delay="750">
    <div class="container d-flex flex-row-reverse justify-content-center justify-content-xl-start">
        <div class="oprec-content text-center">
            @if (session()->has('message') && (session('message') == 'Submitted'))
                <h2 class="oprec-title" data-aos="fade-up">THANK YOU for enrolling</h2>
                <p class="oprec-notif text-center text-xl-end" data-aos="fade-up" data-aos-delay="500">Please wait for further announcements.</p>
            @else
                <h1 class="oprec-title d-flex align-items-center justify-content-center" data-aos="fade-up">
                    <img src="/img/kingsman-logo.png" class="kingsman-logo" alt="">
                    PEN RECRUITMENT
                </h1>
                <p class="oprec-subtitle text-center" data-aos="fade-up" data-aos-delay="250">Are you our next agent?
                </p>
                <div class="oprec-divider" data-aos="zoom-in" data-aos-delay="750"></div>
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <a href="/registration" class="oprec-button mx-auto mx-md-0" data-aos="fade-up" data-aos-delay="500">Register Now</a>
                    <button type="button" class="d-block oprec-info mt-3 mt-md-0" data-aos="fade-up" data-aos-delay="750"  data-bs-toggle="modal" data-bs-target="#exampleModal">Read the requirements</button>
                </div>
            @endif
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">REQUIREMENTS</h5>
        </div>
        <div class="modal-body">
            <h5>Persyaratan Umum</h5>
            <ol>
                <li>Beriman kepada Tuhan Yang Maha Esa</li>
                <li>Warga F54 & F55</li>
                <li>Berkomitmen Tinggi</li>
                <li>Mau Belajar</li>
            </ol>
            <H5>Persyaratan Berkas</H5>
            <ol>
                <li>Curriculum Vitae</li>
                <li>MBTI (16 Personalities)</li>
                <li>Motivation Letter</li>
                <li>Essay tentang ECS dan divisi yang dipilih</li>
                <li>Surat komitmen selama menjadi Aslab ECS</li>
                <li>Wajib follow akun instagram ECS</li>
            </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="modal-close-button" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

@endsection
