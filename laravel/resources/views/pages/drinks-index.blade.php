@extends('layouts.main-layout')
@section('content')
  <h1>Drinks</h1>
  <h1> <a href="{{route('drink-create')}}">Create new drink</a> </h1>
  <ul>
    @foreach ($drinks as $drink)
      <li>
        <a href="{{ route('drink-show', $drink -> id) }}">
          {{$drink -> name}}
        </a>
        <a href="{{ route('drink-edit', $drink -> id) }}">EDIT</a>
        <a href="{{ route('drink-delete', $drink -> id) }}">DELETE</a>
      </li>
    @endforeach
  </ul>
@endsection
