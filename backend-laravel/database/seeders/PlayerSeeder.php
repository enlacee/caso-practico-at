<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tableName = (new Player)->getTable();
        $now = now(); // Get the current timestamp
        $faker = Faker::create();
        $CLIENTE_ID = 1;
        $PROMOTOR_ID = 2;
        $VALIDADOR_ID = 3;

        DB::table($tableName)->insert([
            'name' => 'Juan Garza Cliente',
            'rol_id' => $CLIENTE_ID,
            'wallet_doc_number' => $faker->unique(true)->numberBetween($min = 1, $max = 99999999),
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table($tableName)->insert([
            'name' => 'Mario Zapata Promotor',
            'rol_id' => $PROMOTOR_ID,
            'wallet_doc_number' => $faker->unique(true)->numberBetween($min = 1, $max = 99999999),
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table($tableName)->insert([
            'name' => 'Ruben Medrano Validador',
            'rol_id' => $VALIDADOR_ID,
            'wallet_doc_number' => $faker->unique(true)->numberBetween($min = 1, $max = 99999999),
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table($tableName)->insert([
            'name' => 'Julio Meza',
            'rol_id' => $CLIENTE_ID,
            'wallet_doc_number' => $faker->unique(true)->numberBetween($min = 1, $max = 99999999),
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table($tableName)->insert([
            'name' => 'Pedro Rojas',
            'rol_id' => $CLIENTE_ID,
            'wallet_doc_number' => $faker->unique(true)->numberBetween($min = 1, $max = 99999999),
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
