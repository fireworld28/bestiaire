<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Models\Creature;

class CreatureController extends Controller
{
    public function index() {

    $creature = creature::orderBy('nom')->get();
     

    return view('creature.index', ['creature' => $creature ]);

    }

    public function show(creature $creature) {

    return view('creature.show', ['creature' => $creature]);

    }

    public function create(creature $creature) {

    return view('creature.create', ['creature' => $creature], ['type' => creature::TYPES]);

    }

    public function store(Request $request) {

        $donnees = $this->valider($request);
        $creature = creature::create($donnees);
        return redirect()->route('creature.show', $creature)->with('succes', "La créature {$creature->nom} a été ajouté !");

    }

    private function valider(Request $request): array {

    return $request->validate([
    'nom' => ['required', 'string', 'max:30'],
    'type' => ['required', Rule::in(creature::TYPES)],
    'points_de_vie' => ['required', 'integer', 'min:1'],
    'attaque' => ['required', 'integer', 'min:1'],
    'description' => ['nullable', 'string', 'max:1000'],
    ], [
    'required' => 'Le champ :attribute est obligatoire.',
    // ... un message par règle utilisée
    ]);

    }    

}
