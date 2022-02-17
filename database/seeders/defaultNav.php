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
            "name" => "test",
            "url" => "test",
            "page_id" => 1
        ]);
    }
}
