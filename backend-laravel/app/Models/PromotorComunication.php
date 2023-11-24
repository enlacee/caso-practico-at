<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;
use App\Models\Player;

class PromotorComunication extends Model
{
    use HasFactory;

    /**
     * Get the transaction that belongs to the promotorComunication.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    /**
     * Get the playerPromotor that belongs to the PromotorComunication.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function playerPromotor()
    {
        return $this->belongsTo(Player::class);
    }
}
