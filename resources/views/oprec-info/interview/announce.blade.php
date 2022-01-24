@extends('layouts.main')

@section('content')

<section id="announce-oprec" class="container px-4">
  <form action="/codecheck" method="POST" class="form announce mx-auto" data-aos="zoom-in">
    @csrf
    <div class="text-center">
      <img src="/img/kingsman-logo.png" class="kingsman-logo" alt="">
    </div>
    <label for="number" class="form-label">Civil Identity Code</label>
    <input class="form-control" type="text" name="number" id="number" autofocus tabindex="1" placeholder="FXX.1.XXX">
    @error('number')
    <small class="text-warning">{{ $message }}</small>
    @enderror
    <div class="d-flex flex-row-reverse my-3 justify-content-between">
      <button type="submit" class="announce-button" tabindex="2">Check Your Code!</button>
    </div>
  </form>
</section>

@endsection
