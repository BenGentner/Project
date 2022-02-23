<?php

namespace Database\Seeders;

use App\Models\nav;
use Illuminate\Database\Seeder;

class defaultNav extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nav::factory()->create([
           "name" => "Startseite",
           "page_id" => 1
        ]);
        Nav::factory()->create([
            "name" => "test",
            "page_id" => 2
        ]);
    }
}
