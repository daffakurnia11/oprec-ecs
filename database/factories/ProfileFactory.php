<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $id = 2;
        return [
            'user_id'           => $id,
            'student_number'    => ($id++ <= 10) ? '023119400000' . $id : '023120400000' . $id,
            'university'        => 'Institut Teknologi Sepuluh Nopember',
            'major'             => 'Teknik Fisika',
            'batch'             => '2019',
            'whatsapp'          => '085156317473',
        ];
    }
}
