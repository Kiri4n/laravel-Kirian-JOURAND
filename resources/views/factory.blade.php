@extends("layout")
@section("content")
    <p>a: {{$a->name}}, {{$a->brand}}, {{$a->price}} €</p>
    <p>b: {{$b->name}}, {{$b->brand}}, {{$b->price}} €</p>
@stop

