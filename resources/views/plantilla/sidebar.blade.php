<div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="icon-speedometer"></i> Dashbord</a>
                    </li>
                    <li class="nav-title">
                        Menú
                    </li>

                   
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-tasks"></i> Hojas de Vida</a>
                    </li>
                                        
                    <li class="nav-item">
                     <a class="nav-link" href="{{url('equipo')}}" onclick="event.preventDefault(); document.getElementById('ordenador-form').submit();"><i class="fa fa-list"></i> Equipos</a>
                    
                     <form id="ordenador-form" action="{{url('equipo')}}" method="GET" style="display: none;">
                        {{csrf_field()}} 
                     </form>
                    
                    </li>
                    
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('impresora')}}" onclick="event.preventDefault(); document.getElementById('impresora-form').submit();"><i class="fa fa-list"></i> Impresoras</a>
                    
                    <form id="impresora-form" action="{{url('impresora')}}" method="GET" style="display: none;">
                       {{csrf_field()}} 
                    </form>
                    </li>
x
                                        
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i> Usuarios</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-list"></i> Roles</a>
                    </li>
                        
                    
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>