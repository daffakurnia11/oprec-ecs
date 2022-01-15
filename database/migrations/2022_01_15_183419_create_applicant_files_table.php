<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id');
            $table->string('essay');
            $table->string('cv');
            $table->string('mbti');
            $table->string('motlet');
            $table->string('commitment');
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
        Schema::dropIfExists('applicant_files');
    }
}
