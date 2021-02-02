@extends('layouts.main-layout')
@section('content')
  <h1>Drinks</h1>
  <ul>
    @foreach ($drinks as $drink)
      <li>
        <a href="{{ route('drink-show', $drink -> id) }}">
          {{$drink -> name}}
        </a>
      </li>


    @endforeach
  </ul>
@endsection
