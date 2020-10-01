<?php

namespace AbeGning\Demande\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = ['uuid','cnib','datexpi','fichier','user_id'];

}

