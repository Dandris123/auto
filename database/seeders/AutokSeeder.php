<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AutokSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $tipus = [
            "audi",
            "suzuki",
            "bmw",
            "porsche"
        ];
        $szin = [
            "fekete",
            "fehér",
            "piros",
        ];

        for($i = 0; $i<10;$i++) {
            DB::table('autok')->insert([
                'rendszam' => $this->generateRandomString()."-".mt_rand(100, 999),
                'tipus' => $tipus[array_rand($tipus)],
                'szin' => $szin[array_rand($szin)],
            ]);
        }

    }

    function generateRandomString() {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 3; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
