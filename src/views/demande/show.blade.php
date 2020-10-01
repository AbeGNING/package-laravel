@extends('demande::layout', ['pTitre' => 'Détails demande #'.$document->id])

@section('content')

    <div class="row">
        <div class="col-md-4 text-right">Date :</div>    
        <div class="col-md-8"> {{ $document->created_at->format('d/m/Y') }} </div>    
        
        <div class="col-md-4 text-right">Numéro carte  d'identité :</div>    
        <div class="col-md-8"> {{ $document->cnib }} </div>    
        
        <div class="col-md-4 text-right">Date expiration :</div>    
        <div class="col-md-8"> {{ $document->datexpi }} </div>    
        
        <div class="col-md-4 text-right">CNIB importé :</div>    
        <div class="col-md-8"> <a href="{{ '/storage/'.$document->fichier }}">Consulter le document</a> </div>    
    </div>
    <br><hr>
    <div class="row">    
        <div class="col-md-12"> <a href="{{ route('demandes.edit', $document->uuid) }}" class="float-right"> <small> <i class="fa fa-edit"></i> Modifier demande</small> </a> </div>    
    </div>
@endsection