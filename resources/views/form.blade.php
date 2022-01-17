@extends('layouts.main')

@section('content')

<section id="form-oprec" class="container px-4">
    <form action="/registration" method="POST" class="form mx-auto" enctype="multipart/form-data" data-aos="zoom-in">
        @csrf
        <div class="text-center">
            <img src="/img/kingsman-logo.png" class="kingsman-logo" alt="">
        </div>
        <div id="pageOne" style="display: block;">
            <div class="row">
                <div class="col-12 mb-4">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" name="name" tabindex="1" value="{{ old('name') }}" autofocus>
                    @error('name')
                        <small class="text-warning">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6 mb-4">
                    <label for="number" class="form-label">No. Warga</label>
                    <input type="text" class="form-control" id="number" name="number" tabindex="2" value="{{ old('number') }}">
                    @error('number')
                        <small class="text-warning">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6 mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" tabindex="3" value="{{ old('email') }}">
                    @error('email')
                        <small class="text-warning">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6 mb-4">
                    <label for="line_id" class="form-label">Line</label>
                    <input type="text" class="form-control" id="line_id" name="line_id" tabindex="4" value="{{ old('line_id') }}">
                    @error('line_id')
                        <small class="text-warning">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6 mb-4">
                    <label for="whatsapp" class="form-label">Whatsapp</label>
                    <input type="text" class="form-control" id="whatsapp" name="whatsapp" tabindex="5" value="{{ old('whatsapp') }}">
                    @error('whatsapp')
                        <small class="text-warning">{{ $message }}</small>
                    @enderror
                </div>
                <div class="d-flex flex-row-reverse my-3">
                    <button type="button" class="form-button" id="one-to-two" tabindex="6">Next</button>
                </div>
            </div>
        </div>
        <div id="pageTwo" style="display: none;">
            <div class="row">
                <div class="col-md-6 mb-4 order-1 order-md-1">
                    <label for="first_choice" class="form-label">Divisi Pertama</label>
                    <select class="form-select" name="first_choice" id="first_choice" tabindex="7" value="{{ old('first_choice') }}">
                        <option selected disabled>-- Pilih Divisi --</option>
                        <option {{ old('first_choice') == 'AI' ? 'selected' : '' }} value="AI">Artificial Inteligence</option>
                        <option {{ old('first_choice') == 'IOT' ? 'selected' : '' }} value="IOT">Internet of Things</option>
                        <option {{ old('first_choice') == 'Prodes' ? 'selected' : '' }} value="Prodes">Product Design</option>
                        <option {{ old('first_choice') == 'IA' ? 'selected' : '' }} value="IA">Industrial Automation</option>
                    </select>
                    @error('first_choice')
                        <small class="text-warning">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6 mb-4 order-2 order-md-3">
                    <label for="first_reason" class="form-label">Alasan</label>
                    <textarea class="form-control" name="first_reason" id="first_reason" rows="5"
                        tabindex="8">{{ old('first_reason') }}</textarea>
                    @error('first_reason')
                        <small class="text-warning">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6 mb-4 order-3 order-md-2">
                    <label for="second_choice" class="form-label">Divisi Kedua</label>
                    <select class="form-select" name="second_choice" id="second_choice" tabindex="9" value="{{ old('second_choice') }}">
                        <option selected disabled>-- Pilih Divisi --</option>
                        <option {{ old('second_choice') == 'AI' ? 'selected' : '' }} value="AI">Artificial Inteligence</option>
                        <option {{ old('second_choice') == 'IOT' ? 'selected' : '' }} value="IOT">Internet of Things</option>
                        <option {{ old('second_choice') == 'Prodes' ? 'selected' : '' }} value="Prodes">Product Design</option>
                        <option {{ old('second_choice') == 'IA' ? 'selected' : '' }} value="IA">Industrial Automation</option>
                    </select>
                    @error('second_choice')
                        <small class="text-warning">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6 mb-4 order-4 order-md-4">
                    <label for="second_reason" class="form-label">Alasan</label>
                    <textarea class="form-control" name="second_reason" id="second_reason" rows="5"
                        tabindex="10">{{ old('second_reason') }}</textarea>
                    @error('second_reason')
                        <small class="text-warning">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="d-flex flex-row-reverse my-3 justify-content-between">
                <button type="button" class="form-button" id="two-to-three" tabindex="11">Next</button>
                <button type="button" class="form-button" id="two-to-one">Back</button>
            </div>
        </div>
        <div id="pageThree" style="display: none;">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <label for="essay" class="form-label">Essay</label>
                    <input class="form-control" type="file" accept=".pdf" name="essay" id="essay" tabindex="12">
                    @error('essay')
                        <small class="text-warning">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6 mb-4">
                    <label for="screenshot" class="form-label">Screenshot Follow Instagram ECS</label>
                    <input class="form-control" type="file" accept=".jpg,.jpeg,.png" name="screenshot" id="screenshot" tabindex="13">
                    @error('screenshot')
                        <small class="text-warning">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6 mb-4">
                    <label for="cv" class="form-label">Curriculum Vitae</label>
                    <input class="form-control" type="file" accept=".pdf" name="cv" id="cv" tabindex="14">
                    @error('cv')
                        <small class="text-warning">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6 mb-4">
                    <label for="mbti" class="form-label">MBTI</label>
                    <input class="form-control" type="file" accept=".pdf" name="mbti" id="mbti" tabindex="15">
                    @error('mbti')
                        <small class="text-warning">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6 mb-4">
                    <label for="motlet" class="form-label">Motivation Letter</label>
                    <input class="form-control" type="file" accept=".pdf" name="motlet" id="motlet" tabindex="16">
                    @error('motlet')
                        <small class="text-warning">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6 mb-4">
                    <label for="commitment" class="form-label">Surat Komitmen</label>
                    <input class="form-control" type="file" accept=".pdf" name="commitment" id="commitment" tabindex="17">
                    @error('commitment')
                        <small class="text-warning">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="d-flex flex-row-reverse my-3 justify-content-between">
                <button type="submit" class="form-button" tabindex="18">Submit</button>
                <button type="button" class="form-button" id="three-to-two">Back</button>
            </div>
        </div>
    </form>
</section>

@endsection
