<table class="table table-striped table-bordered" border="1px">
	
	<thead>
		<th>Id</th>
		<th>Nombre</th>
		<th>Telefono</th>					
		<th>Direccion</th>
		<th>Seleccionar</th>
		</thead>

		
	@foreach($cliente as $clientes)
	<tbody>
		<td> {{$clientes->id}} </td>
		<td> {{$clientes->nombreCliente}} </td>
		<td> {{$clientes->telefonoCliente}} </td>
		<td> {{$clientes->direccionCliente}} </td>

		<!-- Seleccionar -->
		<td>
			<input type="button" value="X" class="btn btn-primary" onClick="enviarFormulario('{{$clientes->nombreCliente}}','{{$clientes->id}}')" data-dismiss="modal" aria-label="Close">
		</td>
							
	</tbody>
	@endforeach

</table>