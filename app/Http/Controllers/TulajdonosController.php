<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tulajdonos;
use App\Models\Auto;

class TulajdonosController extends Controller
{
    public function index(){
        $cars = Auto::all();
        return view("tulajdonos",['cars' => $cars]);
    }

    public function store(Request $request)
    {
        $tulajdonos = new Tulajdonos;
        $tulajdonos->nev = $request->name;
        $tulajdonos->tulajdonjog_kezd = $request->start;
        $tulajdonos->tulajdonjog_veg = $request->end;
        $tulajdonos->autok_id = $request->auto;
        $tulajdonos->save();
        return redirect('tulajdonos');
    }

}