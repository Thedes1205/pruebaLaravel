<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Document::create([
            'name'=>'Solicitud'
        ]);
        Document::create([
            'name'=>'Cuestionario socieconómico'
        ]);
        Document::create([
            'name'=>'Carta compromiso'
        ]);
        Document::create([
            'name'=>'Carta de recomendación'
        ]);
        Document::create([
            'name'=>'Comprobante de ingresos'
        ]);
        Document::create([
            'name'=>'Comprobante de domicilio'
        ]);
        Document::create([
            'name'=>'Kardex certificado'
        ]);
        Document::create([
            'name'=>'Constancia de situación fiscal'
        ]);
        Document::create([
            'name'=>'CURP'
        ]);
        //
    }
}
