<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = new User;
        $user->name     = 'Daffa Kurnia Fatah';
        $user->email    = 'daffakurniaf11@gmail.com';
        $user->password = Hash::make('123123123');
        $user->roles    = 'Admin';
        $user->save();

        $profile = new Profile;
        $profile->user_id           = '1';
        $profile->photo             = 'Daffa Kurnia_photo.jpg';
        $profile->student_number    = '02311940000068';
        $profile->university        = 'Institut Teknologi Sepuluh Nopember';
        $profile->major             = 'Teknik Fisika';
        $profile->batch             = '2019';
        $profile->whatsapp          = '085156317473';
        $profile->save();

        $user = new User;
        $user->name     = 'Annisa Septyana Ningrum';
        $user->email    = 'daffakurnia11@gmail.com';
        $user->password = Hash::make('123123123');
        $user->roles    = 'Member';
        $user->save();

        $course = new Course;
        $course->course_name    = 'Praktikum SPK';
        $course->slug           = 'praktikum-spk';
        $course->desc           = 'Diwajibkan untuk seluruh mahasiswa Teknik Fisika ITS angkatan 2020';
        $course->contact        = 'daffakurnia11';
        $course->open_regis     = Carbon::now();
        $course->close_regis    = '2022-03-24 00:00:00';
        $course->save();

        $course = new Course;
        $course->course_name    = 'Pelatihan Prokom';
        $course->slug           = 'pelatihan-prokom';
        $course->desc           = 'Ditujukan untuk seluruh mahasiswa Teknik Fisika ITS angkatan 2021';
        $course->contact        = 'daffakurnia11';
        $course->open_regis     = Carbon::now();
        $course->close_regis    = '2022-03-24 00:00:00';
        $course->save();
    }
}
