@extends("layout")
@section("content")
    <p>a: {{$a->increment()}}</p>
    <p>b: {{$b->increment()}}</p>
    <p>c: {{$c->increment()}}</p>
@stop
