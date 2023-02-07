@extends("layout")
@section("content")
    <p>FactureLine opel: tva: {{$a->getTva()}}%</p>
    <p>FactureLine renault: tva: {{$b->getTva()}}%</p>
@stop

