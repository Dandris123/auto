<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Balesetek;

class BalesetekController extends Controller
{
    public function index(){
        return view("baleset");
    }

    public function store(Request $request)
    {
        $tulajdonos = new Balesetek;
        $tulajdonos->Idopont = $request->idopont;
        $tulajdonos->serules_leirasa = $request->serules_leirasa;
        $tulajdonos->save();
        return redirect('baleset');
    }
}