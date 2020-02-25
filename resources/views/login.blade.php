<!DOCTYPE html>
<html lang="en">

  <head>

    <title> El Mariachi de mi Tierra </title>

  <!-- Archivos CSS -->
  {!!Html::style('css/bootstrap.css')!!}
  
  </head>
  
  <body class="bodyini fondoLogin">
    
    <div class="container" style="margin-top:40px">
      <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
          <div class="panel panel-default">
            <!--
            <div class="panel-heading">
            </div>
            -->

          <div class="panel-body alpha40">

            <!-- Inicio de Formulario -->
            {!!Form::open(['route'=>'Login.store', 'method'=>'POST'])!!}
            <fieldset>

                <!-- Inicio de Logo -->
                <div class="row">
                  <div class="center-block">
                    <img class="profile-img" src="img/IconoLogin.jpg" width="180px" height="150px">
                  </div>
                </div>
                <!-- Fin de Logo -->
                <BR>

                <div class="row">
                  <div class="col-sm-12 col-md-10  col-md-offset-1 ">

                    <!-- Input Nro 1 -->
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span> 
                        {!!Form::text('usuario',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu Usuario'])!!}
                      </div>
                    </div>

                    <!-- Input Nro 2 -->
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu Password'])!!}
                      </div>
                    </div>

                    <!-- Boton -->
                    <div class="form-group">
                      {!!Form::submit('Iniciar',['class'=>'btn btn-lg btn-inverse btn-block'])!!}
                    </div>

                    <!-- Alerta -->
                    <div class="form-group">
                      @include('alerts.errors')
                      @include('alerts.camposVacios')
                    </div>

                  </div>
                </div>
            </fieldset>
            {!! Form::close() !!}
            <!-- Fin de Formulario -->

          </div>
          
          <!--
          <div class="panel-footer ">
            <a href="#"> Recuperar Contraseña </a> 
          </div>
          --> 

          </div>
      </div>
    </div>
  </div>

  </body>

  <!-- Scripts -->
  {!!Html::script('js/jquery-1.11.1.min.js')!!}
  {!!Html::script('js/bootstrap.min.js')!!}


</html>
