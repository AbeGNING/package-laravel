<?php

namespace Abe\Demande\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use Abe\Demande\Models\Document;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Abe\Demande\Mail\DemandeEnvoyeeMail;

class DemandeController extends Controller
{
    public function index()
    {
        return view('demande::demande.index', [
            'demandes' => Document::all()
        ]);
    }
   
    public function create()
    {
        return view('demande::demande.createoredit', [
            'titre'    => 'Nouvelle demande',
            'btnName'  => 'Soumettre',
            'document' => new Document
        ]);
    }
   
    public function store(Request $request)
    {
        $doc = Document::create([
           'uuid' => Str::uuid(),
           'cnib' => $request->cnib,
           'datexpi' => $request->datexpi,
           'fichier' => $request->file('fichier')->store('demandes'),
           'user_id' => 1 // Auth::user()->id
        ]);

        Mail::to(config('demande.envoye_a'))->send(new DemandeEnvoyeeMail($request->cnib));    
        return redirect()->route('demandes.show', $doc->uuid);;
    }

    public function show($uuid)
    {
        return view('demande::demande.show', [
            'document' => Document::where('uuid', $uuid)->first() 
        ]);
    }
   
    public function edit($uuid)
    {
        return view('demande::demande.createoredit', [
            'titre'    => 'Nouvelle demande',
            'method'   => method_field('patch'),
            'btnName'  => 'Editer',
            'document' => Document::where('uuid', $uuid)->first() 
        ]);
    }
    
    public function update(Request $request,  $uuid)
    {
        $doc = Document::where('uuid', $uuid)->first();
        $doc->cnib      = $request->cnib;
        $doc->datexpi   = $request->datexpi;
        $doc->fichier   = isset($request->fichier) ? $request->file('fichier')->store('documents') : Document::where('uuid', $uuid)->first()->fichier;
        $doc->save();
        return view('demande::demande.show', [
            'document' => Document::where('uuid', $uuid)->first() 
        ]);
    }
   
}
