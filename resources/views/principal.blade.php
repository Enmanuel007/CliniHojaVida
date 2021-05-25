<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Compras-Ventas con Laravel y Vue Js- webtraining-it.com">
    <meta name="keyword" content="Sistema Compras-Ventas con Laravel y Vue Js">
    <title>Proyecto</title>
    <!-- Icons -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/simple-line-icons.min.css')}}" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
<header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!--PONER LOGO-->
        <!--<a class="navbar-brand" href="#"></a>-->
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav navbar-nav d-md-down-none">
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Dashbord</a>
            </li>
           
        </ul>
        <ul class="nav navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    <span class="d-md-down-none">usuario </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Cuenta</strong>
                    </div>
                    <a class="dropdown-item" href="" 
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-lock"></i> Cerrar sesión</a>

                    <form id="logout-form" action="" method="POST" style="display: none;">
                      
                    </form>
                </div>
            </li>
        </ul>
    </header>

    <div class="app-body">

       @include("plantilla.sidebar")

        <!-- Contenido Principal -->
           @yield('contenido')
        <!-- /Fin del contenido principal -->
    </div>   

    <footer class="app-footer">
        <span><a href="Enmanuel">Enmanuel</a> &copy; 2021</span>
        <span class="ml-auto">Enmanuel <a href="Enmanuel">Enmanuel</a></span>
    </footer>

    <!-- Bootstrap and necessary plugins -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/pace.min.js')}}"></script>
    <!-- Plugins and scripts required by all views -->
    <script src="{{asset('js/Chart.min.js')}}"></script>
    <!-- GenesisUI main scripts -->
    <script src="{{asset('js/template.js')}}"></script>


    <script>
    
        /*EDITAR ORDENADOR EN VENTANA MODAL*/
        $('#abrirmodalEditar').on('show.bs.modal', function (event) {
        
        //console.log('modal abierto');
        
        var button = $(event.relatedTarget) 

        
        var responsable_modal_editar = button.data('responsable')
        var activos_modal_editar = button.data('activos')

        var mac_modal_editar = button.data('mac')
        var ip_modal_editar = button.data('ip')
        var nombreequipo_modal_editar = button.data('nombreequipo')
        var fechaelaboracion_modal_editar = button.data('fechaelaboracion')
        var fechacompra_modal_editar = button.data('fechacompra')
        var tipoequipo_modal_editar = button.data('tipoequipo')
        var proveedor_modal_editar = button.data('proveedor')
        var marca_modal_editar = button.data('marca')
        var serial_modal_editar = button.data('serial')
        
        var modelo_modal_editar = button.data('modelo')
        var color_modal_editar = button.data('color')
        var serialadaptador_modal_editar = button.data('serialadaptador')
        
        var marcaram_modal_editar = button.data('marcaram')
        var tiporam_modal_editar = button.data('tiporam')
        var capacidadram_modal_editar = button.data('capacidadram')

        var marcadisco_modal_editar = button.data('marcadisco')
        var serialdisco_modal_editar = button.data('serialdisco')
        var capacidaddisco_modal_editar = button.data('capacidaddisco')

        var marcaprocesador_modal_editar = button.data('marcaprocesador')
        var modeloprocesador_modal_editar = button.data('modeloprocesador')
        var velocidadprocesador_modal_editar = button.data('velocidadprocesador')

        var marcamonitor_modal_editar = button.data('marcamonitor')
        var serialmonitor_modal_editar = button.data('serialmonitor')
        var modelomonitor_modal_editar = button.data('modelomonitor')
        var activomonitor_modal_editar = button.data('activomonitor')     
              
        var licenciasaludips_modal_editar = button.data('licenciasaludips')
        var seriesaludips_modal_editar = button.data('seriesaludips')
        var licenciasisconfig_modal_editar = button.data('licenciasisconfig')
        var seriesisconfig_modal_editar = button.data('seriesisconfig')
        var licenciasyngo_modal_editar = button.data('licenciasyngo')
        var seriesyngo_modal_editar = button.data('seriesyngo')
        var licenciamanager_modal_editar = button.data('licenciamanager')
        var seriesismanager_modal_editar = button.data('seriesismanager')
        var licenciaoffice_modal_editar = button.data('licenciaoffice')
        var serieoffice_modal_editar = button.data('serieoffice')
    
        var lectorpdf_modal_editar = button.data('lectorpdf')
        var navegador_modal_editar = button.data('navegador')

        var areaservicio_modal_editar = button.data('areaservicio')
        var fechadesignado_modal_editar = button.data('fechadesignado')
        var cargoresponsable_modal_editar = button.data('cargoresponsable')   

        var id_ordenador = button.data('id_ordenador')
        
        var modal = $(this)
        // modal.find('.modal-title').text('New message to ' + recipient)
       
        modal.find('.modal-body #responsable').val(responsable_modal_editar);
        modal.find('.modal-body #activos').val(activos_modal_editar);
        
        modal.find('.modal-body #mac').val(mac_modal_editar);
        modal.find('.modal-body #ip').val(ip_modal_editar);
        modal.find('.modal-body #nombreequipo').val(nombreequipo_modal_editar);
        modal.find('.modal-body #fechaelaboracion').val(fechaelaboracion_modal_editar);
        modal.find('.modal-body #fechacompra').val(fechacompra_modal_editar);
        modal.find('.modal-body #tipoequipo').val(tipoequipo_modal_editar);
        modal.find('.modal-body #proveedor').val(proveedor_modal_editar);
        modal.find('.modal-body #marca').val(marca_modal_editar);
        modal.find('.modal-body #serial').val(serial_modal_editar);
        
        modal.find('.modal-body #modelo').val(modelo_modal_editar);
        modal.find('.modal-body #color').val(color_modal_editar);
        modal.find('.modal-body #serialadaptador').val(serialadaptador_modal_editar);
        

        modal.find('.modal-body #marcaram').val(marcaram_modal_editar);
        modal.find('.modal-body #tiporam').val(tiporam_modal_editar);
        modal.find('.modal-body #capacidadram').val(capacidadram_modal_editar);
        
        modal.find('.modal-body #marcadisco').val(marcadisco_modal_editar);
        modal.find('.modal-body #serialdisco').val(serialdisco_modal_editar);
        modal.find('.modal-body #capacidaddisco').val(capacidaddisco_modal_editar);

        modal.find('.modal-body #marcaprocesador').val(marcaprocesador_modal_editar);
        modal.find('.modal-body #modeloprocesador').val(modeloprocesador_modal_editar);
        modal.find('.modal-body #velocidadprocesador').val(velocidadprocesador_modal_editar);

        modal.find('.modal-body #marcamonitor').val(marcamonitor_modal_editar);
        modal.find('.modal-body #serialmonitor').val(serialmonitor_modal_editar);
        modal.find('.modal-body #modelomonitor').val(modelomonitor_modal_editar);
        modal.find('.modal-body #activomonitor').val(activomonitor_modal_editar);
        
        modal.find('.modal-body #licenciasaludips').val(licenciasaludips_modal_editar);
        modal.find('.modal-body #seriesaludips').val(seriesaludips_modal_editar);
        modal.find('.modal-body #licenciasisconfig').val(licenciasisconfig_modal_editar);
        modal.find('.modal-body #seriesisconfig').val(seriesisconfig_modal_editar);
        modal.find('.modal-body #licenciasyngo').val(licenciasyngo_modal_editar);
        modal.find('.modal-body #seriesyngo').val(seriesyngo_modal_editar);
        modal.find('.modal-body #licenciamanager').val(licenciamanager_modal_editar);
        modal.find('.modal-body #seriesismanager').val(seriesismanager_modal_editar);
        modal.find('.modal-body #licenciaoffice').val(licenciaoffice_modal_editar);
        modal.find('.modal-body #serieoffice').val(serieoffice_modal_editar);

        
        modal.find('.modal-body #lectorpdf').val(lectorpdf_modal_editar);
        modal.find('.modal-body #navegador').val(navegador_modal_editar);

        modal.find('.modal-body #areaservicio').val(areaservicio_modal_editar);
        modal.find('.modal-body #fechadesignado').val(fechadesignado_modal_editar);
        modal.find('.modal-body #cargoresponsable').val(cargoresponsable_modal_editar);

        modal.find('.modal-body #id_ordenador').val(id_ordenador);
        })



    </script>


</body>

</html>