<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenadores', function (Blueprint $table) {
            $table->id();
            

            $table->string('activos',50)->unique();  
                      
            $table->dateTime('fechaelaboracion');
            $table->string('responsable',50)->nullable();
            $table->string('tipoequipo',50)->nullable();
            $table->dateTime('fechacompra');
            $table->string('proveedor',50)->nullable();
            $table->string('marca',50)->nullable();
            $table->string('serial',50)->nullable();
            $table->string('modelo',50)->nullable();
            $table->string('color',50)->nullable();
            $table->string('serialadaptador',50)->nullable();

          

            $table->string('marcaram',50)->nullable();
            $table->string('tiporam',50)->nullable();
            $table->string('capacidadram',50)->nullable();

            $table->string('marcadisco',50)->nullable();
            $table->string('serialdisco',50)->nullable();
            $table->string('capacidaddisco',50)->nullable();
            $table->string('marcaprocesador',50)->nullable();
            $table->string('modeloprocesador',50)->nullable();
            $table->string('velocidadprocesador',50)->nullable();

            $table->string('marcamonitor',50)->nullable();
            $table->string('serialmonitor',50)->nullable();
            $table->string('modelomonitor',50)->nullable();
            $table->string('activomonitor',50)->nullable();

            $table->string('mac',50)->unique();
            $table->string('ip',50)->nullable();
            $table->string('nombreequipo',50)->nullable();


            $table->boolean('licenciasaludips')->default(0);
            $table->string('seriesaludips',50)->nullable();
            $table->boolean('licenciaoffice')->default(0);
            $table->string('serieoffice',50)->nullable();
            $table->boolean('licenciasisconfig')->default(0);
            $table->string('seriesisconfig',50)->nullable();
            $table->boolean('licenciasyngo')->default(0);
            $table->string('seriesyngo',50)->nullable();
            $table->boolean('licenciamanager')->default(0);
            $table->string('seriesismanager',50)->nullable();

           
            $table->string('lectorpdf',50)->nullable();
            $table->string('navegador',50)->nullable();

            $table->string('areaservicio',50)->nullable();
            $table->dateTime('fechadesignado');
            $table->string('cargoresponsable',50)->nullable();

            $table->boolean('condicion')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenadores');
    }
}
