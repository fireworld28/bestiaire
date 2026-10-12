@extends('layouts.app')

@section('titre', "$creature->nom - page de description")


@section('contenu')
    <article class="carte">
        <h1>{{$creature->nom}}</h1><span class="badge-{{ strtolower($creature->type) }}">{{ $creature->type }}</span>
        <table>
            <tr>
                <th>PV:</th>  <td>{{$creature->points_de_vie}}</td> 
            </tr> 
            <tr>
                <th>ATK:</th>  <td>{{$creature->attaque}}</td> 
            </tr>  
            <tr>
                <th>Description:</th>  <td>{{$creature->description}}</td>
            </tr>
        </table>
        <button class="button-secondaire"><a href="{{ url('/creature') }}">Retour à la liste</button>
    </article>
@endsection

