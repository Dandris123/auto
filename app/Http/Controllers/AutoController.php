<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Auto;
use App\Models\Balesetek;
use App\Models\Tulajdonos;

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

    public function list(){

        $cars = Auto::all();
        return view("autoList", ['cars' => $cars]);
    }


    public function getData(int $id){
        $balesetCount = Balesetek::where('autok_id',$id)->count(); //megszámolja
        $tulajdonos = Tulajdonos::where('autok_id',$id)->first();//legelső elemet hozza


        $tulajnev = "<i>Nincs</>";
if($tulajdonos){
    $tulajnev = $tulajdonos->nev ." (".$tulajdonos->tulajdonjog_kezd . " - ".$tulajdonos->tulajdonjog_veg.")";
}

        return [
            'balesetCount' => $balesetCount,
            'tulajdonos' => $tulajnev
        ];
    }

}