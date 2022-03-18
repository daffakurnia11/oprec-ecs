<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Course_memberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $id = 11;
        $classes = ['A', 'B', 'C', 'D', 'E', 'F'];
        return [
            'user_id'       => $id++,
            'course_id'     => 1,
            'course_group_id' => mt_rand(1, 10),
            'classes'       => $classes[mt_rand(0, 5)],
            'krsm'          => 'default.pdf',
        ];
    }
}
