<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;


class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $players = Player::with('rol:id,name')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Player::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * Show The player only with transaction approved by validator
     */
    public function show(string $id)
    {
        // 01. basic filter (show all transactions)
        // $player = Player::with(['rol:id,name', 'transactions'])->find($id);

        // 02. best filter
        $STATUS_VALIDATOR = 1;
        $player = Player::with([
            'rol:id,name',
            'transactions' => function ($query) use ($STATUS_VALIDATOR) {
            $query->where('player_validador_status', $STATUS_VALIDATOR);
        }])->find($id);

        return $player;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return Player::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $player = Player::find($id);

        if (!$player) {
            return response()->json(['message' => 'Player not found'], 404);
        }

        return $player->delete();
    }
}
