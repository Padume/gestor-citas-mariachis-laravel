@extends('layouts.admin') 
@section('content')


<div class="row" style="padding:10px">
      <div class="col-lg-12">
         <div class="panel panel-default">

          <div class="panel-heading">
               Listado de Serenatas
          </div>

          <div class="panel-body">

              <div class="row" style="padding:15px">


                <!-- Buscar -->
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </span>
                     
                     <input type="text" class="form-control" placeholder="Ingresa la Direccion o Telefono del Cliente" aria-describedby="basic-addon1" id="datoBuscar" onkeyup="filtroTablas('Serenatas')">
                </div>
                <BR><BR>

                 <div class="users">

                    <div id="buscarDato">

                    <table class="table table-striped table-bordered" border="1px">
                        <thead>
                            <th>Id</th>
                            <th>Direccion</th>
                            <th>Hora</th>
                            <th>Fecha</th>
                            <th>Valor</th>
                            <th>Observacion</th>
                            <th>Estado</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>

                        @foreach($serenata as $serenatas)
                        <tbody>
                            <td> {{$serenatas->id}} </td>
                            <td> {{$serenatas->direccionSerenata}} </td>
                            <td> {{$serenatas->horaSerenata}} </td>
                            <td> {{$serenatas->fechaSerenata}} </td>
                            <td> {{$serenatas->valorSerenata}} </td>
                            <td> {{$serenatas->ObservacionSerenata}} </td>

                            @if ( $serenatas->estadoSerenata == "En Proceso") 
                            <td class="btn btn-primary">

                            @elseif ( $serenatas->estadoSerenata == "Terminado") 
                            <td class="btn btn-warning">

                            @else
                            <td class="btn btn-danger">

                            @endif

                            {{$serenatas->estadoSerenata}}
                            </td>
                            
                            <!-- Editar -->
                            <td>
                                {!!link_to_route('Serenatas.edit', $title = '', $parameters = $serenatas->id, $attributes = ['class'=>'btn btn-primary fa fa-edit'])!!}
                            </td>

                            <!-- Eliminar -->
                            <td>
                                {!!Form::open(['route'=> ['Serenatas.destroy',$serenatas->id],'method'=>'DELETE'])!!}
                                    {!!Form::submit('X',['class'=>'btn btn-danger'])!!}
                                {!!Form::close()!!} 
                            </td>
                            
                        </tbody>
                        @endforeach

                    
                    </table>
                    </div>
                    
                    <!-- Alerta -->
                    <div class="form-group">
                         @include('alerts.datoCreado')
                    </div>

                    <!-- Paginacion -->
                    {!! str_replace ('/?', '?', $serenata-> render ()) !!}

                </div>  

              </div>
            </div>
            </div>
      </div>
    </div>

@stop