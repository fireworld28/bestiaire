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

    public function store(Request $request) {

        $donnees = $this->valider($request);
        $joueur = Joueur::create($donnees);
        return redirect()->route('joueurs.show', $joueur)->with('succes', "Le joueur {$joueur->pseudo} a été ajouté !");

    }

    private function valider(Request $request): array {

    return $request->validate([
    'pseudo' => ['required', 'string', 'max:30'],
    'classe' => ['required', Rule::in(Joueur::CLASSES)],
    'niveau' => ['required', 'integer', 'min:1'],
    'bio'
    => ['nullable', 'string', 'max:500'],
    ], [
    'required' => 'Le champ :attribute est obligatoire.',
    // ... un message par règle utilisée
    ]);

    }    

}
