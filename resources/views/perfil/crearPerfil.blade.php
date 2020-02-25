@extends('layouts.admin') 
@section('content')
      
    <div class="row" style="padding:10px" > 
      <div class="col-lg-12">
         <div class="panel panel-default">

          <div class="panel-heading">
               Crear Perfil
          </div>

          <div class="panel-body">
              <div class="row" style="padding:15px">

                  <!-- Inicio de Formulario -->
                  {!!Form::open(['route'=>'perfiles.store', 'method'=>'POST'])!!}
                                        
                  <!-- Añadimos el Formulario -->
                  @include('perfil.formulario')

                  <!-- Alerta -->
                  <div class="form-group">
                      @include('alerts.camposVacios')
                      @include('alerts.datoCreado')
                  </div>
                  
                  <!-- Izquierda  -->
                  <div class="col-lg-6">
                  </div>
                                
                  <!-- Derecha  -->
                  <div class="col-lg-6">

                      <div class="form-group">
                        {!!Form::submit('Crear Perfil',['class'=>'btn btn-lg btn-primary btn-block'])!!}
                      </div>

                  </div>

                  {!!Form::close()!!}

              </div>
            </div>
            </div>
      </div>
    </div>
@stop