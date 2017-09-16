<?php

use Illuminate\Database\Seeder;

class BatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('batches')->insert([
            [
                'name' => "Unassigned Students", 
                "time" => "None",
                "status" => "active",
                "started_at" => \Carbon\Carbon::now()
            ]
        ]);
    }
}
