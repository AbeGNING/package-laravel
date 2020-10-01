@extends('demande::layout', ['pTitre' => $titre])

@section('content')

<div class="post">
    @include('demande::demande._form')
</div>

@endsection