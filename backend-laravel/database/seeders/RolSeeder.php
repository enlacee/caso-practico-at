<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tableName = (new Rol)->getTable();
        $now = now(); // Get the current timestamp

        DB::table($tableName)->insert([
            'name' => 'cliente','created_at' => $now, 'updated_at' => $now
        ]);
        DB::table($tableName)->insert([
            'name' => 'promotor', 'created_at' => $now, 'updated_at' => $now
        ]);
        DB::table($tableName)->insert([
            'name' => 'validador', 'created_at' => $now, 'updated_at' => $now
        ]);
    }
}
