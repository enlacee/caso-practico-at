<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PromotorComunication;


class PromotorCommunicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $communications = PromotorComunication::all();
        $communications= PromotorComunication::with(['transaction', 'playerPromotor:id,name'])->get();
        return $communications;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $communications = PromotorComunication::with(['transaction', 'playerPromotor:id,name'])->find($id);
        return $communications;
    }
}
