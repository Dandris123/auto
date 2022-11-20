@extends('layouts.master')
@section('title','Tulaj')
@section('content')
@include('layouts.menu')
<div class="container p-5 my-5 border rounded-5 bg-warning text-dark col-lg-6">
  <div class="container p-2 my-2 text-dark"><h1>Tulajdonos regisztrálása</h1> </div>
<form method="post" action="{{url('tulajdonos-save')}}">
    @csrf
    <div class="form-group col-md-2">
      <label for="auto" class="form-label">Autó</label>
    <select name="auto" class="form-select" aria-label="Default select example">
      @foreach ($cars as $car)
        <option value="{{$car->id}}">{{$car->rendszam}}</option>
      @endforeach
    </select>
  </div>
    <div class="form-group col-md-2">
      <label for="name" class="form-label">Tulajdonos neve</label>
      <input name="name" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Tulajdonos neve">
    </div>
    <div class="form-group col-md-2">
        <label for="start" class="form-label">Kezdet</label>
        <input name="start" type="text" class="form-control" id="start" aria-describedby="startHelp" placeholder="Kezdet">
    </div>
    <div class="form-group col-md-2">
        <label for="end" class="form-label">Vég</label>
        <input name="end" type="text" class="form-control" id="end" aria-describedby="endHelp" placeholder="Vég">
    </div>
    <button type="submit" class="btn btn-primary">Mentés</button>
  </form>
@endsection