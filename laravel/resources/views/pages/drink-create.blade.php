@extends('layouts.main-layout')
@section('content')
<form action="{{route('drink-store')}}" method="post">
  @csrf
  @method('post')

  <label for="name">Name: </label>
  <input type="text" name="name">
  <br>
  <br>
  <label for="gradation">Gradation: </label>
  <input type="number" name="gradation">
  <br>
  <br>
  <label for="price">Price: </label>
  <input type="number" name="price">
  <br>
  <br>
  <input type="submit" value="SAVE">
</form>

@endsection