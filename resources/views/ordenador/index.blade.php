@extends ('principal')

@section ('contenido')


<main class="main">
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
                                <div class="input-group">
                                    <select class="form-control col-md-3">
                            <option value="nombre">Computador</option>
                                      <option value="descripcion">Descripción</option>
                                    </select>
                                    <input type="text" class="form-control" placeholder="Buscar texto">
                                    <button type="submit"  class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr class="bg-primary">
                                   
                                    <th>Computador</th>
                                    <th>Descripción</th>
                                    <th>Estado</th>
                                    <th>Editar</th>
                                    <th>Cambiar Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            @foreach($ordenadores as $compu)

                                <tr>
                                    
                                    <td>{{$compu->activos}}</td>
                                    <td>{{$compu->fechaelaboracion}}</td>
                                    <td>{{$compu->responsable}}</td>
                                    <td>{{$compu->tipoequipo}}</td>
                                    <td>{{$compu->fechacompra}}</td>
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

                                    <td>{{$compu->mac}}</td>
                                    <td>{{$compu->ip}}</td>
                                    <td>{{$compu->nombreequipo}}</td>

                                    <td>{{$compu->licenciasaludips}}</td>
                                    <td>{{$compu->seriesaludips}}</td>
                                    <td>{{$compu->licenciaoffice}}</td>
                                    <td>{{$compu->serieoffice}}</td>
                                    <td>{{$compu->licenciasisconfig}}</td>
                                    <td>{{$compu->seriesisconfig}}</td>
                                    <td>{{$compu->licenciasyngo}}</td>
                                    <td>{{$compu->seriesyngo}}</td>
                                    <td>{{$compu->licenciamanager}}</td>
                                    <td>{{$compu->seriesismanager}}</td>

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
                        <nav>
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">Anterior</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                </li>
                               
                                <li class="page-item">
                                    <a class="page-link" href="#">Siguiente</a>
                                </li>
                            </ul>
                        </nav>
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
           
            
        </main>

@endsection