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
  <div class="container p-2 my-2 text-dark"><h1>Autók regisztrálása</h1> </div>
<form method="post" action="{{url('auto-save')}}">
    @csrf
    <div class="form-group col-md-2">
      <label for="rendszam" class="form-label">Add meg kérlek a rendszámod!</label>
      <input name="rendszam" type="text" class="form-control" id="rendszam" aria-describedby="rendszamHelp" placeholder="PL:XYZ-123">
    </div>
    <div class="form-group col-md-2">
        <label for="tipus" class="form-label">Add meg kérlek az autód típúsát!</label>
        <input name="tipus" type="text" class="form-control" id="tipus" aria-describedby="tipusHelp" placeholder="PL:Volkswagen Golf">
    </div>
    <div class="form-group col-md-2">
        <label for="szin" class="form-label">Add meg kérlek az autód színét!</label>
        <input name="szin" type="text" class="form-control" id="szin" aria-describedby="szinHelp" placeholder="PL:Barna">
    </div>
    <button type="submit" class="btn btn-primary">Mentés</button>
  </form>
@endsection