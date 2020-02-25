@extends('layouts.admin') 
@section('content')
      
    <div class="row" style="padding:10px" > 
      <div class="col-lg-12">
         <div class="panel panel-default">

          <div class="panel-heading">
               Editar Usuario
          </div>

          <div class="panel-body">
              <div class="row" style="padding:15px">

                  <!-- Inicio de Formulario -->
                  {!!Form::model($user,['route'=> ['usuario.update',$user -> id ], 'method'=>'PUT'])!!}
                      
                    <!-- Añadimos el Formulario -->
                  @include('usuario.formulario');

                  <div class="form-group">
                    {!!Form::submit('Editar Usuario',['class'=>'btn btn-lg btn-primary btn-block'])!!}
                  </div>

                  {!!Form::close()!!}
                  <!-- Fin Formulario -->
                  
              </div>
            </div>
            </div>
      </div>
    </div>
@stop
