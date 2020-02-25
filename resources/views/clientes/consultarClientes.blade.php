@extends('layouts.admin') 
@section('content')


<div class="row" style="padding:10px">
      <div class="col-lg-12">
         <div class="panel panel-default">

          <div class="panel-heading">
               Consultar Clientes
          </div>

          <div class="panel-body">

              <div class="row" style="padding:15px">

              	<!-- Buscar -->
                <div class="input-group">
					<span class="input-group-addon" id="basic-addon1">
					  		<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</span>
					 
					 <input type="text" class="form-control" placeholder="Ingresa el Nombre o Telefono del Cliente" aria-describedby="basic-addon1" id="datoBuscar" onkeyup="filtroTablas('Clientes')">
				</div>
				<BR><BR>

                 <div class="users">

                 	<div id="buscarDato">

					<table class="table table-striped table-bordered" border="1px">
						<thead>
							<th>Id</th>
							<th>Nombre</th>
							<th>Telefono</th>
							<th>Direccion</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</thead>

						@foreach($cliente as $clientes)
						<tbody>
							<td> {{$clientes->id}} </td>
							<td> {{$clientes->nombreCliente}} </td>
							<td> {{$clientes->telefonoCliente}} </td>
							<td> {{$clientes->direccionCliente}} </td>

							<!-- Editar -->
							<td>
								{!!link_to_route('Clientes.edit', $title = '', $parameters = $clientes->id, $attributes = ['class'=>'btn btn-primary fa fa-edit'])!!}
							</td>

							<!-- Eliminar -->
							<td>
								{!!Form::open(['route'=> ['Clientes.destroy',$clientes->id],'method'=>'DELETE'])!!}
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
				    {!! str_replace ('/?', '?', $cliente-> render ()) !!}


				</div>	

              </div>
            </div>
            </div>
      </div>
    </div>

@stop

