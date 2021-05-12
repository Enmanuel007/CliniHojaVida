<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordenador extends Model
{
    use HasFactory;  

    protected $table = 'ordenadores';

    protected $fillable = ['activos','fechaelaboracion', 'responsable','tipoequipo','fechacompra','proveedor','marca','serial',
    'modelo','color','serialadaptador','marcaram','tiporam','capacidadram','marcadisco','serialdisco','capacidaddisco',
    'marcaprocesador','modeloprocesador','velocidadprocesador','marcamonitor','serialmonitor','modelomonitor','activomonitor',
    'mac','ip','nombreequipo', 'licenciasaludips', 'seriesaludips','licenciaoffice','serieoffice','licenciasisconfig',
    'seriesisconfig', 'licenciasyngo', 'seriesyngo','licenciamanager', 'seriesismanager', 'lectorpdf', 'navegador', 'areaservicio',
    'fechadesignado', 'cargoresponsable', 'condicion'];

    
}
