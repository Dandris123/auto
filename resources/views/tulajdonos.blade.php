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
</nav>
<div class="container p-5 my-5 border rounded-5 bg-warning text-dark col-lg-6">
  <div class="container p-2 my-2 text-dark"><h1>Tulajdonos regisztrálása</h1> </div>
<form method="post" action="{{url('tulajdonos-save')}}">
    @csrf
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