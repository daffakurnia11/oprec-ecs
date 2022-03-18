<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('photo')->nullable();
            $table->string('student_number');
            $table->string('university')->default('Institut Teknologi Sepuluh Nopember');
            $table->string('major')->default('Teknik Fisika');
            $table->integer('batch');
            $table->string('line_id')->unique()->nullable();
            $table->string('whatsapp');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
