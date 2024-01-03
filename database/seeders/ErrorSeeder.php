<?php

namespace Database\Seeders;

use App\Models\Error;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ErrorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Error::create([
            'description'=>'Se ve borroso'
        ]);
        Error::create([
            'description'=>'Datos incorrectos'
        ]);
        Error::create([
            'description'=>'No esta el documento'
        ]);
        Error::create([
            'description'=>'Documento incorrecto'
        ]);
        Error::create([
            'description'=>'Ningun error'
        ]);
        //
    }
}
