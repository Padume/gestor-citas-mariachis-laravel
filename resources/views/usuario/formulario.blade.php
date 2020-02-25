<!-- Izquierda  -->
<div class="col-lg-6">

	<!-- Campo del Nombre-->
	<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>

	<!-- Campo del Apellido-->
	<div class="form-group">
		{!!Form::label('apellido','Apellido:')!!}
		{!!Form::text('apellido',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Apellido del usuario'])!!}
	</div>

	<!-- Campo del Email-->
	<div class="form-group">
		{!!Form::label('correo','Correo:')!!}
		{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Correo'])!!}
	</div>

</div>

<!-- Derecha  -->
<div class="col-lg-6">

	<!-- Campo del Usuario-->
	<div class="form-group">
		{!!Form::label('usuario','Usuario:')!!}
		{!!Form::text('usuario',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Login'])!!}
	</div>

	<!-- Campo del Password -->
	<div class="form-group">
		{!!Form::label('contrasena','Password:')!!}
		{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa la Contraseña'])!!}
	</div>

	<!-- Campo de la Direccion-->
	<div class="form-group">
		{!!Form::label('direccion','Direccion:')!!}
		{!!Form::text('direccion',null,['class'=>'form-control', 'placeholder'=>'Ingresa la Direccion del Usuario'])!!}
	</div>

</div>