@extends('demande::layout', ['pTitre'=>'Demandes effectuées'])

@section('content')

@if ($demandes->count() > 0)
    <div class="list-group">
       @foreach ($demandes as $demande)
            <a href="{{ route('demandes.show', $demande->uuid) }}" class="list-group-item list-group-item-action"> 
                <b>#{{ $demande->id  }}</b> {{ $demande->cnib }} 
                <small class="float-right">{{ $demande->created_at->format('d/m/Y') }}</small>
            </a>
       @endforeach
    </div>
@else
    <p class="lead">
        Aucune demande effectuée jusqu'à présent
    </p>
@endif
@endsection