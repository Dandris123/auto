<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tulajdonos;

class TulajdonosController extends Controller
{
    public function index(){
        return view("tulajdonos");
    }

    public function store(Request $request)
    {
        $tulajdonos = new Tulajdonos;
        $tulajdonos->nev = $request->name;
        $tulajdonos->tulajdonjog_kezd = $request->start;
        $tulajdonos->tulajdonjog_veg = $request->end;
        $tulajdonos->save();
        return redirect('tulajdonos');
    }

}