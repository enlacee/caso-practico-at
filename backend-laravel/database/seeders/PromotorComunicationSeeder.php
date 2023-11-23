<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\PromotorComunication;

class PromotorComunicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tableName = (new PromotorComunication)->getTable();
        $now = now(); // Get the current timestamp
        $player_id = 1;
        $player_promotor_id = 2;

        DB::table($tableName)->insert([
            'transaction_id' => '1',
            'player_promotor_id' => $player_promotor_id,
            'contact_channel' => 'whatsapp',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        DB::table($tableName)->insert([
            'transaction_id' => '2',
            'player_promotor_id' => $player_promotor_id,
            'contact_channel' => 'whatsapp',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table($tableName)->insert([
            'transaction_id' => '3',
            'player_promotor_id' => $player_promotor_id,
            'contact_channel' => 'whatsapp',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        DB::table($tableName)->insert([
            'transaction_id' => '4',
            'player_promotor_id' => $player_promotor_id,
            'contact_channel' => 'telegram',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table($tableName)->insert([
            'transaction_id' => '5',
            'player_promotor_id' => $player_promotor_id,
            'contact_channel' => 'telegram',
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
