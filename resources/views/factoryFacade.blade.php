@extends("layout")
@section("content")
    <p>Commande: <br>
        Voiture: {{$a['car']->name}}, {{$a['car']->brand}} <br>
        Concession: [ {{$a['concession']->concessionIterator->next()->name}} ]<br>
        Facture: {{$a['car']->name}}, {{$a['facture']->toPay}} €
    </p>
@stop

