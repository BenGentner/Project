<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class defaultRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::factory()->create([
                "id" => 1,
                "name" => "default"
            ]);
        Role::factory()->create([
            "id" => 2,
            "name" => "admin"
        ]);
    }
}
