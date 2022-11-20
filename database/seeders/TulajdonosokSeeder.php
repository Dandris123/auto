<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Auto;

class TulajdonosokSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $vezeteknev = [
            "Debreceni",
            "Zsigri",
            "Burkus",
            "Gál",
            "Kaszás",
            "Novacsek",
            "Gyöngyösi"
        ];
        $keresztnev = [
            "András",
            "Dániel",
            "Tamás",
            "Bence",
            "Levi",
            "Dániel",
            "Ádám"
        ];

        foreach(Auto::all() as $k => $auto) {
            DB::table('tulajdonosok')->insert([
                'nev' => $vezeteknev[array_rand($vezeteknev)] . " ". $keresztnev[array_rand($keresztnev)],
                'tulajdonjog_kezd' => "2022-".mt_rand(1, 12)."-".mt_rand(1, 28),
                'tulajdonjog_veg' => "2022-".mt_rand(1, 6)."-".mt_rand(1, 15),
                'autok_id' => $auto->id,
            ]);
        }
    }
    
}
