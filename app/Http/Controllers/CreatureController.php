<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Creature;

class CreatureController extends Controller
{
    public function index() {

    $creature = creature::orderBy('nom')->get();

    return view('creature.index', ['creature' => $creature]);

    }

    public function show(creature $creature) {

    return view('creature.show', ['creature' => $creature]);

    }
}
