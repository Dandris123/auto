<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Auto;

class BalesetekSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $serules = [
            "Fának ütközött",
            "Autónak ment",
            "Szarvast elütött",
            "kiugrott az autó elé a kis Bambi",
        ];

        foreach(Auto::all() as $k => $auto) {
            for($i = 0; $i<mt_rand(1, 10);$i++) {
                DB::table('baleset')->insert([
                    'Idopont' => "2022-".mt_rand(1, 12)."-".mt_rand(1, 28),
                    'serules_leirasa' => $serules[array_rand($serules)],
                    'autok_id' => $auto->id,
                ]);
            }
        }

    }

}
