@extends('layouts.app')

@section('titre',"page des créatures")
@section('contenu')
<h1>les créatures ({{ $creature->count() }})</h1>
 
<div class="grile">

    @forelse ($creature as $creature1)
        <article class="carte">
            <h2><a href="{{ route('creature.show', $creature1) }}">{{ $creature1->nom }}</a></h2>
            <span class="badge-{{ strtolower($creature1->type) }}">{{ $creature1->type }}</span>
            <p class="stats"> PV :{{$creature1->points_de_vie}} et ATK :{{$creature1->attaque}}</p>
        </article>
    @empty
        <p>Aucune créature pour le moment.</p>
    @endforelse
</div>
@endsection