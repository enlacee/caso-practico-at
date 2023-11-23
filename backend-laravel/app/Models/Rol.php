<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Player;

class Rol extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
