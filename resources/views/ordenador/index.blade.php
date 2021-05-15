@extends ('principal')

@section ('contenido')


<main class="main">

<div style="border:1px solid #F9F9F9 ;overflow-y:hidden;overflow-x:scroll; overflow: yellow;">
            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/">BACKEND - SISTEMA - HOJAS DE VIDA</a></li>
            </ol>
            <div class="container-fluid">
                <!-- Ejemplo de tabla Listado -->
                <div class="card">
                    <div class="card-header">

                       <h2>Listado de Computadores</h2><br/>
                      
                        <button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#abrirmodal">
                            <i class="fa fa-plus fa-2x"></i>&nbsp;&nbsp;Agregar Computador
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                            {!!Form::open(array('url'=>'computador','method'=>'GET','autocomplete'=>'off','role'=>'search'))!!} 
                                <div class="input-group">
                                   
                                    <input type="text" name="buscarTexto" class="form-control" placeholder="Buscar texto" value="{{$buscarTexto}}">
                                    <button type="submit"  class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                                </div>
                            {{Form::close()}}
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr class="bg-primary">
                                   
                                    <th>RESPONSABLE HV</th>
                                    <th>NÚMERO ACTIVO</th>
                                    <th> DIRECCIÓN MAC</th>
                                    <th> DIRECCIÓN IP.</th>
                                    <th>USUARIO EQUIPO</th>
                                    <th>FECHA ELABORACIÓN</th>
                                    <th>FECHA. COMPRA</th>
                                    <th>TIPO EQUIPO</th>
                                    <th>NOMBRE PROVEEDOR</th>
                                    <th>MARCA EQUIPO</th>
                                    <th>SERIAL EQUIPO</th>
                                    <th>MODELO EQUIPO</th>
                                    <th>COLOR EQUIPO</th>
                                    <th>SERIAL ADAPTADOR</th>

                                    <th>MARCA RAM</th>
                                    <th>TIPO RAM</th>
                                    <th>CAMACIDAD RAM</th>

                                    <th>MARCA DISCO</th>
                                    <th>SERIAL DISCO</th>
                                    <th>CAPACIDAD DISCO</th>

                                    <th>MARCA PROCESADOR</th>
                                    <th>MODELO PROCESADOR</th>
                                    <th>VELOCIDAD PROCESADOR</th>

                                    <th>MARCA MONITOR</th>
                                    <th>SERIAL MONITOR</th>
                                    <th>MODELO MONITOR</th>
                                    <th>ACTIVO MONITOR</th>

                                    <th>LICENCIA SALUDIPS</th>
                                    <th>SERIE SALUDIPS</th>

                                    <th>LICENCIA SISCONFIG/th>
                                    <th>SERIE SISCONFIG</th>

                                    <th>LICENCIA SYNGO/th>
                                    <th>SERIE SYNGO</th>

                                    <th>LICENCIA MANAGER/th>
                                    <th>SERIE MANAGER</th>

                                    <th>LICENCIA OFFICE</th>
                                    <th>SERIE OFFICE</th>


                                    <th>LECTOR PDF</th>
                                    <th>NAVEGADOR</th>
                                    <th>ÁREA ASIGNADA</th>
                                    <th>FECHA DESIGNADA</th>
                                    <th>CARGO RESPONSABLE</th>
                                    
                                    <th>ESTADO</th>
                                    <th>EDITAR</th>
                                    <th>CAMBIAR ESTADO</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            @foreach($ordenadores as $compu)

                                <tr>
                                    
                                    <td>{{$compu->responsable}}</td>
                                    <td>{{$compu->activos}}</td>
                                    <td>{{$compu->mac}}</td>
                                    <td>{{$compu->ip}}</td>
                                    <td>{{$compu->nombreequipo}}</td>
                                    <td>{{$compu->fechaelaboracion}}</td>
                                    <td>{{$compu->fechacompra}}</td>
                                    <td>{{$compu->tipoequipo}}</td>                                    
                                    <td>{{$compu->proveedor}}</td>
                                    <td>{{$compu->marca}}</td>
                                    <td>{{$compu->serial}}</td>
                                    <td>{{$compu->modelo}}</td>
                                    <td>{{$compu->color}}</td>
                                    <td>{{$compu->serialadaptador}}</td>

                                    <td>{{$compu->marcaram}}</td>
                                    <td>{{$compu->tiporam}}</td>
                                    <td>{{$compu->capacidadram}}</td>

                                    <td>{{$compu->marcadisco}}</td>
                                    <td>{{$compu->serialdisco}}</td>
                                    <td>{{$compu->capacidaddisco}}</td>

                                    <td>{{$compu->marcaprocesador}}</td>
                                    <td>{{$compu->modeloprocesador}}</td>
                                    <td>{{$compu->velocidadprocesador}}</td>

                                    <td>{{$compu->marcamonitor}}</td>
                                    <td>{{$compu->serialmonitor}}</td>
                                    <td>{{$compu->modelomonitor}}</td>
                                    <td>{{$compu->activomonitor}}</td>

                                                                        
                                    <td>{{$compu->licenciasaludips}}</td>
                                    <td>{{$compu->seriesaludips}}</td>
                                    
                                    <td>{{$compu->licenciasisconfig}}</td>
                                    <td>{{$compu->seriesisconfig}}</td>

                                    <td>{{$compu->licenciasyngo}}</td>
                                    <td>{{$compu->seriesyngo}}</td>

                                    <td>{{$compu->licenciamanager}}</td>
                                    <td>{{$compu->seriesismanager}}</td>

                                    <td>{{$compu->licenciaoffice}}</td>
                                    <td>{{$compu->serieoffice}}</td>

                                    <td>{{$compu->lectorpdf}}</td>
                                    <td>{{$compu->navegador}}</td>

                                    <td>{{$compu->areaservicio}}</td>
                                    <td>{{$compu->fechadesignado}}</td>
                                    <td>{{$compu->cargoresponsable}}</td>

                                    <td>{{$compu->condicion}}</td>
                                    
                                    <td>
                                        <button type="button" class="btn btn-success btn-md">
                                    
                                          <i class="fa fa-check fa-2x"></i> Activo
                                        </button>
                                       
                                    </td>
                                
                                    <td>
                                        <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#abrirmodal">

                                          <i class="fa fa-edit fa-2x"></i> Editar
                                        </button> &nbsp;
                                    </td>

                                    <td>

                                        
                                        <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fa fa-lock fa-2x"></i> Desactivar
                                        </button>
                                       
                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>

                        {{$ordenadores -> render() }}
                        
                    </div>
                </div>
                <!-- Fin ejemplo de tabla Listado -->
            </div>
            <!--Inicio del modal agregar/actualizar-->
            <div class="modal fade" id="abrirmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Agregar Computador</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                       
                        <div class="modal-body">
                            
                            <div class="form-group row div-error">
                                
                                <div class="text-center text-error">
                                    
                                    <div></div>

                                </div>
                            
                            </div>
                             

                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Computador</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Mac de computador">
                                       
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="email-input">Descripción</label>
                                    <div class="col-md-9">
                                    <input type="email" class="form-control" placeholder="Ingrese descripcion">
                                    </div>
                                </div>


                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
                            <button type="button" class="btn btn-success"><i class="fa fa-save fa-2x"></i> Guardar</button>
                           
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal-->
           
            </div>
        </main>

@endsection