@extends('layouts.main-layout')
@section('content')
  <h1><a href="{{ route('drinks-index') }}"> Torna alla home</a> </h1>
  <h1>id: {{$drink -> id}}</h1>
  <h1>name: {{$drink -> name}}</h1>
  <h1>gradiation: {{$drink -> gradiation}}</h1>
  <h1>price: {{$drink -> price}}</h1>
@endsection
