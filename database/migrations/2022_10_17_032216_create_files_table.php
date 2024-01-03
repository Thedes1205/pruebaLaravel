<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->constrained()->onDelete('cascade');
            $table->string('pathFile');
            $table->string('mimeFile');
            // $table->string('pathSolicitud');
            // $table->string('mimeSolicitud');
            // $table->string('pathSocieconomico');
            // $table->string('mimeSocieconomico');
            // $table->string('pathCompromiso');
            // $table->string('mimeCompromiso');
            // $table->string('pathRecomendacion');
            // $table->string('mimeRecomendacion');
            // $table->string('pathIngresos');
            // $table->string('mimeIngresos');
            // $table->string('pathDomicilio');
            // $table->string('mimeDomicilio');
            // $table->string('pathKardex');
            // $table->string('mimeKardex');
            // $table->string('pathSituacion');
            // $table->string('mimeSituacion');
            // $table->string('pathCurp');
            // $table->string('mimeCurp');
            //  $table->unsignedBigInteger('registration_id')->unique();
          //  $table->foreign('registration_id')->references('id')->on('registrations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
};
