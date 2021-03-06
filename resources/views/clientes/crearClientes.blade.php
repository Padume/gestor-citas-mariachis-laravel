@extends('layouts.admin') 
@section('content')
      
    <div class="row" style="padding:10px" > 
      <div class="col-lg-12">
         <div class="panel panel-default">

          <div class="panel-heading">
               Crear Cliente
          </div>

          <div class="panel-body">
              <div class="row" style="padding:15px">

                  <!-- Inicio de Formulario -->
                  {!!Form::open(['route'=>'Clientes.store', 'method'=>'POST'])!!}
                                        
                  <!-- Añadimos el Formulario -->
                  @include('clientes.formulario')
                  
                   <BR>
                  <!-- Izquierda  -->
                  <div class="col-lg-6">  

                    <!-- Alerta -->
                    <div class="form-group">
                        @include('alerts.camposVacios')
                        @include('alerts.datoCreado')
                    </div>

                  </div>
                                
                  <!-- Derecha  -->
                  <div class="col-lg-6">

                      <div class="form-group">
                        {!!Form::submit('Crear',['class'=>'btn btn-lg btn-primary btn-block'])!!}
                      </div>

                  </div>


                  {!!Form::close()!!}

              </div>
            </div>
            </div>
      </div>
    </div>
@stop