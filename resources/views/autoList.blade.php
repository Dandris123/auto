@extends('layouts.master')
@section('title','Autó lista')
@section('content')
@include('layouts.menu')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Rendszám</th>
        <th scope="col">Tipus</th>
        <th scope="col">Szin</th>
        <th scope="col">Műveletek</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)
        <tr>
            <th scope="row">{{$car->id}}</th>
            <td>{{$car->rendszam}}</td>
            <td>{{$car->tipus}}</td>
            <td>{{$car->szin}}</td>
            <td><button type="button" class="btn btn-primary" onClick="openModal({{$car->id}})">
                Részletek
              </button></td>
          </tr>
        @endforeach
    </tbody>
  </table>
  
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Autók adatai</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          tulajdonos adatai: <span id="tulaj-adatok">-</span>
          <br>
          balesetek száma: <span id="balesetszam">0</span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    function openModal(id){

        $.get( 'http://localhost/auto/public/auto-getdata/'+id, function( data ) {
            $('#tulaj-adatok').html(data.tulajdonos);
            $('#balesetszam').html(data.balesetCount);
            $('#exampleModal').modal('show');
        });

    }
    </script>
  @endsection