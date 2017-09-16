<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'name' => "Test Student 1",
                'gender' => "m",
                "dob" => \Carbon\Carbon::now(),
                'nrc' => str_random(10),
                'address' => str_random(50),
                'phone' => rand(1000000, 9999999),
                'batch_id' => 1
            ],
            [
                'name' => "Test Student 2",
                'gender' => "m",
                "dob" => \Carbon\Carbon::now(),
                'nrc' => str_random(10),
                'address' => str_random(50),
                'phone' => rand(1000000, 9999999),
                'batch_id' => 1
            ],
            [
                'name' => "Test Student 3",
                'gender' => "m",
                "dob" => \Carbon\Carbon::now(),
                'nrc' => str_random(10),
                'address' => str_random(50),
                'phone' => rand(1000000, 9999999),
                'batch_id' => 1
            ],
            [
                'name' => "Test Student 4",
                'gender' => "m",
                "dob" => \Carbon\Carbon::now(),
                'nrc' => str_random(10),
                'address' => str_random(50),
                'phone' => rand(1000000, 9999999),
                'batch_id' => 1
            ]
        ]);
    }
}
