@extends('layouts.admin') 
@section('content')
      
    <div class="row" style="padding:10px" > 
      <div class="col-lg-12">
         <div class="panel panel-default">

          <div class="panel-heading">
               Generar Reporte
          </div>

          <div class="panel-body">

              <div class="form-group">
                {!!Form::label('Poster','Archivo Excel:')!!}
                {!!Form::file('path')!!}
              </div>

          </div>


          </div>
      </div>
    </div>
@stop