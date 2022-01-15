<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_choices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id');
            $table->enum('first_choice', ['AI', 'IOT', 'Prodes', 'IA']);
            $table->text('first_reason');
            $table->enum('second_choice', ['AI', 'IOT', 'Prodes', 'IA']);
            $table->text('second_reason');
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
        Schema::dropIfExists('applicant_choices');
    }
}
