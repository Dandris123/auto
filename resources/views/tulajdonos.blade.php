@extends('layouts.master')
@section('title','Tulaj')
@section('content')
<h2>Üdv, Tulajdonos</h2>
<form method="post" action="{{url('tulajdonos-save')}}">
    @csrf
    <div class="form-group col-md-2">
      <label for="name">Tulajdonos neve</label>
      <input name="name" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Tulajdonos neve">
    </div>
    <div class="form-group col-md-2">
        <label for="start">Kezdet</label>
        <input name="start" type="text" class="form-control" id="start" aria-describedby="startHelp" placeholder="Kezdet">
    </div>
    <div class="form-group col-md-2">
        <label for="end">Vég</label>
        <input name="end" type="text" class="form-control" id="end" aria-describedby="endHelp" placeholder="Vég">
    </div>
    <button type="submit" class="btn btn-primary">Mentés</button>
  </form>
@endsection