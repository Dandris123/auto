@extends('layouts.master')
@section('title','Tulaj')
@section('content')
<h2>Autók!</h2>
<form method="post" action="{{url('auto-save')}}">
    @csrf
    <div class="form-group col-md-2">
      <label for="rendszam">Rendszam</label>
      <input name="rendszam" type="text" class="form-control" id="rendszam" aria-describedby="rendszamHelp" placeholder="Rendszam">
    </div>
    <div class="form-group col-md-2">
        <label for="tipus">Tipus</label>
        <input name="tipus" type="text" class="form-control" id="tipus" aria-describedby="tipusHelp" placeholder="Tipus">
    </div>
    <div class="form-group col-md-2">
        <label for="szin">Szin</label>
        <input name="szin" type="text" class="form-control" id="szin" aria-describedby="szinHelp" placeholder="Szin">
    </div>
    <button type="submit" class="btn btn-primary">Mentés</button>
  </form>
@endsection