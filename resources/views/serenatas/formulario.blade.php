<!-- Izquierda  -->
<div class="col-lg-6">

	<!-- Campo de la Direccion -->
	<div class="form-group">
		{!!Form::label('nombre','Direccion:')!!}
		{!!Form::text('direccionSerenata',null,['class'=>'form-control', 'placeholder'=>'Ingresa la direccion de la Serenata'])!!}
	</div>

	<!-- Campo de la Hora -->
	<div class="form-group">
		{!!Form::label('fecha','Hora Serenata:')!!}
		{!! Form::input('time', 'horaSerenata', null, ['class' => 'form-control', 'placeholder' => 'Date']) !!}
	</div>

	<!-- Campo de la Fecha -->
	<div class="form-group">
		{!!Form::label('fecha','Fecha Serenata:')!!}
		{!! Form::input('date', 'fechaSerenata', null, ['class' => 'form-control', 'placeholder' => 'Date']) !!}
	</div>

	<!-- Campo de la Valor -->
	<div class="form-group">
		{!!Form::label('direccion','Valor de la Serenata:')!!}
		{!!Form::text('valorSerenata',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Valor'])!!}
	</div>

</div>

<!-- Derecha   -->
<div class="col-lg-6">

	<!-- Campo de De -->
	<div class="form-group">
		{!!Form::label('nombre','De Parte De:')!!}
		{!!Form::text('departeDe',null,['class'=>'form-control', 'placeholder'=>'Ingresa la persona que Dedica'])!!}
	</div>

	<!-- Campo de Para -->
	<div class="form-group">
		{!!Form::label('nombre','Dedicado Para:')!!}
		{!!Form::text('dedicadoPara',null,['class'=>'form-control', 'placeholder'=>'Ingresa la persona a quien se le Dedica'])!!}
	</div>


	<!-- Campo de Motivo -->
	<div class="form-group">
		{!!Form::label('nombre','Motivo:')!!}
		{!!Form::text('motivoSerenata',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Motivo de la Serenata'])!!}
	</div>

	<!-- Campo de la Observacion -->
	<div class="form-group">
		{!!Form::label('direccion','Observaciones:')!!}
		{!!Form::text('ObservacionSerenata',null,['class'=>'form-control', 'placeholder'=>'Ingresa alguna Observacion'])!!}
	</div>

	<!-- Campo del Cliente -->
	<div class="form-group">
		{!!Form::label('cliente','Contratante:')!!}
		{!!Form::text('nombreCliente',null,['readonly','id'      => 'nombreCliente'])!!}
		{!!Form::text('idCliente',null,['hidden','id'      => 'idCliente'])!!}
		<a data-toggle="modal" data-target="#myModal" class="btn btn-info">  + </a>
	</div>

</div>
