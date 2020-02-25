<!DOCTYPE html>
<html lang="en">

<head>

    <title>Mariachi</title>

    <!-- Bootstrap Core CSS -->
    {!!Html::style('css/bootstrap.css')!!}

    <!-- MetisMenu CSS -->
    {!!Html::style('css/metisMenu.min.css')!!}

    <!-- Custom CSS -->
    {!!Html::style('css/sb-admin-2.css')!!}

    <!-- Custom Fonts -->
    {!!Html::style('css/font-awesome.css')!!}


</head>

<body class="fondoLogin">

<div class="container">


    <div id="wrapper">

        <!-- Navegacion -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">   <i class="fa fa-cloud"></i>  </a>
                <a class="navbar-brand" href="{!!URL::to('admin')!!}"> El Mariachi de mi Tierra </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">


                <input type="button" onClick="init()"> 
                
                <!-- Inicio Modulo Clientes  -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Clientes
                        <i class="fa fa-users espacioDerecha"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="{!!URL::to('Clientes/create')!!}"><i class="fa fa-user fa-fw"></i> Registrar </a>
                        </li>

                        <li class="divider"> </li>

                        <li>
                            <a href="{!!URL::to('Clientes')!!}"><i class="fa fa-search"></i> Consultar </a>
                        </li>
                    </ul>
                </li>
                <!-- Fin Modulo Clientes  -->


                <!-- Inicio Modulo Serenatas  -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Serenatas
                        <i class="fa fa-music espacioDerecha"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="{!!URL::to('Serenatas/create')!!}"><i class="fa fa-music fa-fw"></i> Registrar </a>
                        </li>

                        <li class="divider"> </li>

                        <li>
                            <a href="{!!URL::to('Serenatas')!!}"><i class="fa fa-search"></i> Consultar </a>
                        </li>

                        <li class="divider"> </li>

                        <li>
                            <a href="{!!URL::to('Mapas')!!}"><i class="fa fa-tags"></i> Ubicacion </a>
                        </li>
                    </ul>
                </li>
                <!-- Fin Modulo Serenatas  -->

                <!-- Inicio Modulo Reportes  -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Reportes
                        <i class="fa fa-file espacioDerecha"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="{!!URL::to('Reportes/create')!!}"><i class="fa fa-sign-in fa-fw"></i> Descargar Archivo </a>
                        </li>

                        <li class="divider"> </li>

                        <li>
                            <a href="{!!URL::to('Reportes')!!}"><i class="fa fa-gear fa-fw"></i> Subir Archivo </a>
                        </li>
                    </ul>
                </li>
                <!-- Fin Modulo Reportes  -->

                <!-- Iconos de Usuarios -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Admin
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="{!!URL::to('cerrarSesion')!!}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>

            </ul>

        </nav>

        <div id="page-wrapper" style="background-color:#F6F6F7">

                <!-- Pagina a Cargar -->
               @yield('content')
         </div>

 </div>

    <!-- Scripts -->
    {!!Html::script('js/jquery-1.11.1.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}
    {!!Html::script('js/consultas.js')!!}

</body>

</html>
