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
                <a href="/registration" class="oprec-button mx-auto mx-xl-0" data-aos="fade-up" data-aos-delay="500">Register Now</a>
            @endif
        </div>
    </div>
</section>

@endsection
