<?php

namespace Database\Seeders;

use App\Models\Applicant_link;
use Illuminate\Database\Seeder;

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

        $link = new Applicant_link;

        $link->link = '';

        $link->save();
    }
}
