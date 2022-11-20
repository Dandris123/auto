<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Balesetek;
use App\Models\Auto;

class BalesetekController extends Controller
{
    public function index(){
        $cars = Auto::all();
        return view("baleset",['cars' => $cars]);
    }

    public function store(Request $request)
    {
        $tulajdonos = new Balesetek;
        $tulajdonos->Idopont = $request->idopont;
        $tulajdonos->serules_leirasa = $request->serules_leirasa;
        $tulajdonos->autok_id = $request->auto;
        $tulajdonos->save();
        return redirect('baleset');
    }


}