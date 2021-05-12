<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use \Ordenador;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;


class OrdenadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //LISTAR LOS REGISTROS

        if($request){

            $sql=trim($request->get('buscarTexto'));
            $ordenadores=DB::table('ordenadores')->where('mac','LIKE','%'.$sql.'%')
            ->orderBy('id','desc')
            ->paginate(7);
            return view('ordenador.index',["ordenadores"=>$ordenadores,"buscarTexto"=>$sql]);
            //return $ordenadores;
        }
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //CREAR REGISTROS

        $ordenador= new Ordenador();
        $ordenador->activos= $request->activos;
        $ordenador->fechaelaboracion= $request->fechaelaboracion;
        $ordenador->responsable= $request->responsable;
        $ordenador->tipoequipo= $request->tipoequipo;
        $ordenador->fechacompra= $request->fechacompra;
        $ordenador->proveedor= $request->proveedor;
        $ordenador->marca= $request->marca;
        $ordenador->serial= $request->serial;
        $ordenador->modelo= $request->modelo;
        $ordenador->color= $request->color;
        $ordenador->serialadaptador= $request->serialadaptador;
        
        $ordenador->marcaram= $request->marcaram;
        $ordenador->tiporam= $request->tiporam;
        $ordenador->capacidadram= $request->capacidadram;
        
        $ordenador->marcadisco= $request->marcadisco;
        $ordenador->serialdisco= $request->serialdisco;
        $ordenador->capacidaddisco= $request->capacidaddisco;
        $ordenador->marcaprocesador= $request->marcaprocesador;
        $ordenador->modeloprocesador= $request->modeloprocesador;
        $ordenador->velocidadprocesador= $request->velocidadprocesador;
        
        $ordenador->marcamonitor= $request->marcamonitor;
        $ordenador->serialmonitor= $request->serialmonitor;
        $ordenador->modelomonitor= $request->modelomonitor;
        $ordenador->activomonitor= $request->activomonitor;
        
        $ordenador->mac= $request->mac;
        $ordenador->ip= $request->ip;
        $ordenador->nombreequipo= $request->nombreequipo;
        
        $ordenador->licenciasaludips= '0';
        $ordenador->seriesaludips= $request->seriesaludips;
        $ordenador->licenciaoffice= '0';
        $ordenador->serieoffice= $request->serieoffice;
        $ordenador->licenciasisconfig= '0';
        $ordenador->seriesisconfig= $request->seriesisconfig;
        $ordenador->licenciasyngo= '0';
        $ordenador->seriesyngo= $request->seriesyngo;
        $ordenador->licenciamanager= '0';
        $ordenador->seriesismanager= $request->seriesismanager;
        
        $ordenador->lectorpdf= $request->lectorpdf;
        $ordenador->navegador= $request->navegador;
        
        $ordenador->areaservicio= $request->areaservicio;
        $ordenador->fechadesignado= $request->fechadesignado;
        $ordenador->cargoresponsable= $request->cargoresponsable;
        
        $ordenador->condicion= '1';
        $ordenador->save();
        return Redirect::to("computador");
        ;
    }

   

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //EDITAR REGISTROS
        
        $ordenador= Ordenador::findOrFail($request->id_ordenador);
        $ordenador->activos= $request->activos;
        $ordenador->fechaelaboracion= $request->fechaelaboracion;
        $ordenador->responsable= $request->responsable;
        $ordenador->tipoequipo= $request->tipoequipo;
        $ordenador->fechacompra= $request->fechacompra;
        $ordenador->proveedor= $request->proveedor;
        $ordenador->marca= $request->marca;
        $ordenador->serial= $request->serial;
        $ordenador->modelo= $request->modelo;
        $ordenador->color= $request->color;
        $ordenador->serialadaptador= $request->serialadaptador;
        
        $ordenador->marcaram= $request->marcaram;
        $ordenador->tiporam= $request->tiporam;
        $ordenador->capacidadram= $request->capacidadram;
        
        $ordenador->marcadisco= $request->marcadisco;
        $ordenador->serialdisco= $request->serialdisco;
        $ordenador->capacidaddisco= $request->capacidaddisco;
        $ordenador->marcaprocesador= $request->marcaprocesador;
        $ordenador->modeloprocesador= $request->modeloprocesador;
        $ordenador->velocidadprocesador= $request->velocidadprocesador;
        
        $ordenador->marcamonitor= $request->marcamonitor;
        $ordenador->serialmonitor= $request->serialmonitor;
        $ordenador->modelomonitor= $request->modelomonitor;
        $ordenador->activomonitor= $request->activomonitor;
        
        $ordenador->mac= $request->mac;
        $ordenador->ip= $request->ip;
        $ordenador->nombreequipo= $request->nombreequipo;
        
        $ordenador->licenciasaludips= '0';
        $ordenador->seriesaludips= $request->seriesaludips;
        $ordenador->licenciaoffice= '0';
        $ordenador->serieoffice= $request->serieoffice;
        $ordenador->licenciasisconfig= '0';
        $ordenador->seriesisconfig= $request->seriesisconfig;
        $ordenador->licenciasyngo= '0';
        $ordenador->seriesyngo= $request->seriesyngo;
        $ordenador->licenciamanager= '0';
        $ordenador->seriesismanager= $request->seriesismanager;
        
        $ordenador->lectorpdf= $request->lectorpdf;
        $ordenador->navegador= $request->navegador;
        
        $ordenador->areaservicio= $request->areaservicio;
        $ordenador->fechadesignado= $request->fechadesignado;
        $ordenador->cargoresponsable= $request->cargoresponsable;
        
        $ordenador->condicion= '1';
        $ordenador->save();
        return Redirect::to("computador");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // Desactivar y Activar REGiSTROS

        $ordenador= Ordenador::findOrFail($request->id_ordenador);

            if($ordenador->condicion=="1"){
                
                $ordenador->condicion= '0';
                $ordenador->save();
                return Redirect::to("ordenador");
        
            } else{

                $ordenador->condicion= '1';
                $ordenador->save();
                return Redirect::to("ordenador");

            }
    }
    
}