@extends('layouts.app')

@section('titre',"Ajouter une créature")

@section('contenu')
    <h1>Ajouter une créature</h1>
    <form class="formulaire" method="POST" action="{{ route('creature.store') }}">
        @csrf

        <div class="champ">
            <label for="nom">Nom </label>
            <input type="text" id="nom" name="nom" value="{{ old('nom') }}">
            @error('nom')
                <p class="erreur">{{ $message }}</p>
            @enderror
        </div>

        <div class="champ">
            <label for="type">Type</label>
            <select id="type" name="type">
                <option value="">-- Choisir--</option>
                @foreach ($type as $type1)
                    <option value="{{ $type1 }}" @selected(old('type1') === $type1)>{{ $type1 }}</option>
                @endforeach
            </select>
            {{-- ... + le @error du champ--}}
        </div>

        <div class="points_de_vie">
            <label for="points_de_vie">Points de vie</label>
            <input type="number" id="points_de_vie" name="points_de_vie" value="{{ old('points_de_vie') }}">
            @error('points_de_vie')
                <p class="erreur">{{ $message }}</p>
            @enderror
        </div>

        <div class="attaque">
            <label for="attaque">Attaque</label>
            <input type="text" id="attaque" name="attaque" value="{{ old('attaque') }}">
            @error('attaque')
                <p class="erreur">{{ $message }}</p>
            @enderror
        </div>    

        <div class="description">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="5" cols="50">
            Ajouter une description
            </textarea>
            @error('description')
                <p class="erreur">{{ $message }}</p>
            @enderror
        </div>            
        <button class="bouton" type="submit">Ajouter</button>

    </form>
@endsection