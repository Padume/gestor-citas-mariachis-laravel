	<!-- Campo del Valor-->
	<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('nombreCliente',null,['class'=>'form-control', 'placeholder'=>'Ingresa el nombre del Cliente'])!!}
	</div>

	<!-- Campo del Telefono -->
	<div class="form-group">
		{!!Form::label('telefono','Telefono:')!!}
		{!!Form::text('telefonoCliente',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Telefono del Cliente'])!!}
	</div>

	<!-- Campo de la Direccion -->
	<div class="form-group">
		{!!Form::label('direccion','Direccion:')!!}
		{!!Form::text('direccionCliente',null,['class'=>'form-control', 'placeholder'=>'Ingresa la Direccion del Cliente'])!!}
	</div>
