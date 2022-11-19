<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Auto;

class AutoController extends Controller
{
    public function index(){
        return view("auto");
    }

    public function store(Request $request)
    {
        $tulajdonos = new Auto;
        $tulajdonos->rendszam = $request->rendszam;
        $tulajdonos->tipus = $request->tipus;
        $tulajdonos->szin = $request->szin;
        $tulajdonos->save();
        return redirect('auto');
    }
}