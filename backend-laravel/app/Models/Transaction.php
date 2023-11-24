<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Player;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'player_id', 'player_validador_id', 'voucher_amount', 'voucher_bank_name', 'player_validador_status'
    ];

    /**
     * Get the player that belongs to the transaction.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
