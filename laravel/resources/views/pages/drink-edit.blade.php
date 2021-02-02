@extends('layouts.main-layout')
@section('content')
  <form action="{{route('drink-update', $drink -> id)}}" method="post">
    @csrf
    @method('post')

    <label for="name">Name: </label>
    <input type="text" name="name" value="{{$drink -> name}}">
    <br><br>

    <label for="gradation">Gradation: </label>
    <input type="text" name="gradation" value="{{$drink -> gradation}}">
    <br><br>

    <label for="price">Price: </label>
    <input type="text" name="price" value="{{$drink -> price}}">
    <br><br>

    <input type="submit" name="" value="UPDATE">
  </form>
@endsection
