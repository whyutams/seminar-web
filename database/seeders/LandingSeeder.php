<?php

namespace Database\Seeders;

use App\Models\Landing;
use Illuminate\Database\Seeder;

class LandingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Landing::updateOrCreate(["id" => 1], [
            'main_description' => "<b>Main Description</b>",
            'schedule_description' => "Schedule Description",
            'schedule_date' => "2025-07-18",
            'hero_image' => "",
            'updated_by' => 1
        ]);
    }
}
