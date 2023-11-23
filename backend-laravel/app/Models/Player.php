<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rol;
use App\Models\Transaction;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'wallet_doc_number', 'rol_id'
    ];

    /**
     * Get the rol that belongs to the player.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    /**
     * Get the transactions associated with the player.
     *
     * This method defines a relationship between the Player and Transaction models,
     * specifying that a Player has many Transaction instances associated with it.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
