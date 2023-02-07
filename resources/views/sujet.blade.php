@extends("layout")
@section("content")
    <p>Sujet non mit à jour: <br>
        Observeur 1 : {{$observeur1->display()}} <br>
        Observeur 2 : {{$observeur2->display()}} <br>
        <br>
        Sujet mit à jour: <br>
        {{$sujet->notifyObservers()}}
        Observeur 1 : {{$observeur1->display()}} <br>
        Observeur 2 : {{$observeur2->display()}} <br>
    </p>
@stop
