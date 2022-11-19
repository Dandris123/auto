@extends('layouts.master')
@section('title','Tulaj')
@section('content')
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="./auto">Autók regisztrálása</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="./tulajdonos">Tulajdonos regisztrálása</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="./baleset">Balesetek regisztrálása</a>
      </li>
    
    </ul>
  </div>  
</nav>
<div class="container p-5 my-5 border rounded-5 bg-warning text-dark col-lg-6">
  <div class="container p-2 my-2 text-dark"><h1>Balesetek regisztrálása</h1> </div>
<form method="post" action="{{url('baleset-save')}}">
    @csrf
    <div class="form-group col-md-2">
      <label for="idopont" class="form-label">Baleset időpontja</label>
      <input name="idopont" type="text" class="form-control" id="idopont" aria-describedby="nameidopontHelp" placeholder="Időpont">
    </div>
    <div class="form-group col-md-2">
        <label for="serules_leirasa" class="form-label">Sérülés pontos leírása</label>
    <textarea class="form-control" id="serules_leirasa" name="serules_leirasa" rows="6"></textarea>
</div>
    <button type="submit" class="btn btn-primary">Mentés</button>
  </form>
@endsection