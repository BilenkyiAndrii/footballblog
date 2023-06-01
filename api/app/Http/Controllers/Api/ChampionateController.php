<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Championate;

class ChampionateController extends Controller
{
    public function index() {
        $championates = Championate::all();
        return response()->json($championates);
    }
}
