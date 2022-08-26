<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UtilisateursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('utilisateurs')->insert([

            [
                'nom' => 'helo',
                'age' => 20,
                'email' => "helo@gmail.com",
                'tel' => 0470707070,
            ],
            [
                'nom' => 'henlo',
                'age' => 22,
                'email' => "henlo@gmail.com",
                'tel' => 0472727272,
            ],
            [
                'nom' => 'henlow',
                'age' => 21,
                'email' => "henlow@gmail.com",
                'tel' => 0471717171,
            ]

            ]);
    }
}
