@component('mail::message')
# Bienvenue sur notre site MOLENRecrut


Bonjour , {{$data->nom}}
Nous avons bien reçu votre demande d 'inscription via l'adresse suivant : {{$ata->email}}
Veuillez patienter 24h, le temps que le compte soit validé


L'administrateur.

Cordialement,<br>
{{ config('app.name') }}
@endcomponent
