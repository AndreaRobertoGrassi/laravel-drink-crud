@extends('layouts.main-layout')
@section('content')
<h1><a href="{{ route('drinks-index') }}"> Torna alla home</a> </h1>
<h1>id: {{$drink -> id}}</h1>
<h1>name: {{$drink -> name}}</h1>
<h1>gradation: {{$drink -> gradation / 10}}%</h1>
<h1>price: {{$drink -> price / 100}}€</h1>
@endsection