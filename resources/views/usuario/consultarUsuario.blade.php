@extends('layouts.admin') 
@section('content')


<div class="row" style="padding:10px">
      <div class="col-lg-12">
         <div class="panel panel-default">

          <div class="panel-heading">
               Consultar Usuarios
          </div>

          <div class="panel-body">

          		<!-- Buscador -->
          		<div class="input-group">
                	<span class="input-group-btn">
                  		<button class="btn btn-default" type="button">Nro Cedula!</button>
                	</span>
                	<input type="text" class="form-control">
              	</div>

              <div class="row" style="padding:15px">

                 <div class="users">
					<table class="table table-striped table-bordered" border="1px">
						<thead>
							<th>Id</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Correo</th>
							<th>Usuario</th>
							<th>Direccion</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</thead>

						@foreach($users as $user)
						<tbody>
							<td> {{$user->id}} </td>
							<td> {{$user->nombre}} </td>
							<td> {{$user->apellido}} </td>
							<td> {{$user->email}} </td>
							<td> {{$user->usuario}} </td>
							<td> {{$user->direccion}} </td>

							<!-- Editar -->
							<td>
								{!!link_to_route('usuario.edit', $title = '', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary fa fa-edit'])!!}
							</td>

							<!-- Eliminar -->
							<td>
								{!!Form::open(['route'=> ['usuario.destroy',$user->id],'method'=>'DELETE'])!!}
									{!!Form::submit('X',['class'=>'btn btn-danger'])!!}
								{!!Form::close()!!} 
							</td>
							
						</tbody>
						@endforeach

					</table>

					<!-- Alerta -->
				    <div class="form-group">
				         @include('alerts.datoCreado')
				    </div>

				    <!-- Paginacion -->
				    {!! str_replace ('/?', '?', $users-> render ()) !!}

				</div>	

              </div>
            </div>
            </div>
      </div>
    </div>

@stop