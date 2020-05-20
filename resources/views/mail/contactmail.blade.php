@component('mail::message')

Bonjour {{$contactmail->name}} !
Merci de nous avoir contacté !
Voici le message que vous nous avez envoyé : <br>
<small>À l'adresse suivante : {{$contactmail->email}}</small>
<h4>Sujet : {{$contactmail->sujet}}</h4>
<p>{{$contactmail->msg}}</p>

@endcomponent