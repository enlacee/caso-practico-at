<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;

use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tableName = (new Transaction)->getTable();
        $now = now(); // Get the current timestamp
        $player_id = 1;
        $player_validador_id = 3;

        DB::table($tableName)->insert([
            'player_id' => $player_id,
            'voucher_amount' => '10',
            'voucher_bank_name' => 'bcp',
            'player_validador_id' => $player_validador_id,
            'player_validador_status' => '0',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table($tableName)->insert([
            'player_id' => $player_id,
            'voucher_amount' => '5',
            'voucher_bank_name' => 'bcp',
            'player_validador_id' => $player_validador_id,
            'player_validador_status' => '1',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table($tableName)->insert([
            'player_id' => $player_id,
            'voucher_amount' => '15',
            'voucher_bank_name' => 'bbva',
            'player_validador_id' => $player_validador_id,
            'player_validador_status' => '0',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table($tableName)->insert([
            'player_id' => $player_id,
            'voucher_amount' => '10',
            'voucher_bank_name' => 'interbank',
            'created_at' => $now,
            'updated_at' => $now
        ]);
        DB::table($tableName)->insert([
            'player_id' => $player_id,
            'voucher_amount' => '10',
            'voucher_bank_name' => 'interbank',
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
