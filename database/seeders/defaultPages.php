<?php

namespace Database\Seeders;

use App\Models\page;
use Illuminate\Database\Seeder;

class defaultPages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::factory()->create([
            "title" => "Test",
            "content" => "ganz viel text",
            "url" => "test",
            "user_id" => 1
        ]);
    }
}
