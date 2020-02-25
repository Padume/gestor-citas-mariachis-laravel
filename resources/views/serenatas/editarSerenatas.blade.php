@extends('layouts.admin') 
@section('content')
      
    <div class="row" style="padding:10px" > 
      <div class="col-lg-12">
         <div class="panel panel-default">

          <div class="panel-heading">
               Editar Serenata
          </div>

          <div class="panel-body">
              <div class="row" style="padding:15px">

                  <!-- Inicio de Formulario -->
                  {!!Form::model($serenata,['route'=> ['Serenatas.update',$serenata -> id ], 'method'=>'PUT'])!!}
                      
                    <!-- Añadimos el Formulario -->
                  @include('serenatas.formulario')

                  <!-- Campo del Estado-->
                  <div class="form-group">
                    {!!Form::label('estado','Estado:')!!}
                    {!! Form::select('estadoSerenata', [ 'Terminado' => 'Terminado', 'En Proceso' => 'En Proceso', 'Cancelado' => 'Cancelado'] , null, ['class' => 'form-control']) !!}
                  <div>

                  </BR>

                  <div class="form-group">
                    {!!Form::submit('Editar Serenata',['class'=>'btn btn-lg btn-primary btn-block'])!!}
                  </div>

                  {!!Form::close()!!}
                  <!-- Fin Formulario -->
                  
              </div>
            </div>
            </div>
      </div>
    </div>
@stop
