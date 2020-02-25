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