@extends('layouts.master')
@section('title','Tulaj')
@section('content')
@include ("menu")
<h2>Balesetek!</h2>
<form method="post" action="{{url('baleset-save')}}">
    @csrf
    <div class="form-group col-md-2">
      <label for="idopont">Idopont</label>
      <input name="idopont" type="text" class="form-control" id="idopont" aria-describedby="nameidopontHelp" placeholder="Idopont">
    </div>
    <div class="form-group col-md-2">
        <label for="serules_leirasa">serules_leirasa</label>
    <textarea class="form-control" id="serules_leirasa" name="serules_leirasa" rows="3"></textarea>
</div>
    <button type="submit" class="btn btn-primary">Mentés</button>
  </form>
@endsection