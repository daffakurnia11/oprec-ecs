<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Course_groupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $id = 1;
        return [
            'course_id'     => 1,
            'user_id'       => $id,
            'num_group'     => $id++,
        ];
    }
}
