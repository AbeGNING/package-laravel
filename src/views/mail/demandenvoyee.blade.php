@component('mail::message')
# Demande soumise

Votre demande a été soumise avec succes ! <br>

Numéro de la carte nationale d'identité : {{ $carteni }}

Abe,<br>
{{ config('app.name') }}
@endcomponent
