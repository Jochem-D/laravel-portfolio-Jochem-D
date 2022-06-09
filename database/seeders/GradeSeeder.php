<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('grades')->insert([
            [
                'course_name' => 'Programme and Career Orientation',
                'test_name' => 'Assessment'
            ],
            [
                'course_name' => 'Computer Science Basics',
                'test_name' => 'Written Exam'
            ],
            [
                'course_name' => 'Programming Basics',
                'test_name' => 'Case Study Exam'
            ],
            [
                'course_name' => 'Object Oriented Programming',
                'test_name' => 'Case Study Exam'
            ],
            [
                'course_name' => 'Object Oriented Programming',
                'test_name' => 'Project'
            ],
            [
                'course_name' => 'Framework Development 1',
                'test_name' => 'Case Study Exam'
            ],
            [
                'course_name' => 'Framework Development 1',
                'test_name' => 'Project'
            ],
            [
                'course_name' => 'Framework Project 1',
                'test_name' => 'Assessment'
            ],
            [
                'course_name' => 'Framework project 1',
                'test_name' => 'Report'
            ],
            [
                'course_name' => 'Framework project 2',
                'test_name' => 'Portfolio'
            ],
            [
                'course_name' => 'Framework Project 2',
                'test_name' => 'Assessment'
            ],
            [
                'course_name' => 'Personality 1',
                'test_name' => '-'
            ],
            [
                'course_name' => 'Personality 2',
                'test_name' => '-'
            ],

            ]);
    }
}
