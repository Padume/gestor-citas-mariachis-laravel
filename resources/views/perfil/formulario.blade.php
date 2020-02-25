<!-- Buscador -->
<div class="input-group">
    <span class="input-group-btn">
        <button class="btn btn-default" type="button">Nombre de Perfil:	</button>
    </span>
    
    {!!Form::text('nombrePerfil',null,['class'=>'form-control'])!!}

</div>
<br><br>

<!-- Catequesis  -->
<fieldset class="scheduler-border">	
<legend class="scheduler-border">Modulos</legend>

	<!-- Izquierda  -->
	<div class="col-lg-6">

		<!-- Usuarios  -->
		<fieldset>
		<legend>Modulo Usuarios</legend>

			<div class="col-lg-6">

				<!-- Crear-->
				<div class="form-group">
					{!! Form::checkbox('usuarios[]', 1, null, ['class' => 'field']) !!}
					{!!	Form::label('crearUsuario','Crear')	!!}
				</div>

				<!-- Consultar-->
				<div class="form-group">
					{!! Form::checkbox('usuarios[]', 2, null, ['class' => 'field']) !!}
					{!!	Form::label('consultarUsuarios','Consultar')	!!}
				</div>

			</div>

			<div class="col-lg-6">

				<!-- Editar-->
				<div class="form-group">
					{!! Form::checkbox('usuarios[]', 3, null, ['class' => 'field']) !!}
					{!!	Form::label('editarUsuarios','Editar')	!!}
				</div>


				<!-- Eliminar -->
				<div class="form-group">
					{!! Form::checkbox('usuarios[]', 4, null, ['class' => 'field']) !!}
					{!!	Form::label('eliminarUsuarios','Eliminar')	!!}
				</div>

			</div>

		</fieldset>

	</div>

	<!-- Derecha  -->
	<div class="col-lg-6">

		<!-- Perfiles  -->
		<fieldset>
		<legend>Modulo Perfiles</legend>

			<div class="col-lg-6">

				<!-- Crear-->
				<div class="form-group">
					{!! Form::checkbox('perfiles[]', 1, null, ['class' => 'field']) !!}
					{!!	Form::label('crearPerfiles','Crear')	!!}
				</div>

				<!-- Consultar-->
				<div class="form-group">
					{!! Form::checkbox('perfiles[]', 2, null, ['class' => 'field']) !!}
					{!!	Form::label('consultarPerfiles','Consultar')	!!}
				</div>

			</div>


			<div class="col-lg-6">

				<!-- Editar-->
				<div class="form-group">
					{!! Form::checkbox('perfiles[]', 3, null, ['class' => 'field']) !!}
					{!!	Form::label('editarPerfiles','Editar')	!!}
				</div>


				<!-- Eliminar -->
				<div class="form-group">
					{!! Form::checkbox('perfiles[]', 4, null, ['class' => 'field']) !!}
					{!!	Form::label('eliminarPerfiles','Eliminar')	!!}
				</div>

			</div>

		</fieldset>

	</div>


	<!-- Izquierda  -->
	<div class="col-lg-6">

		<!-- Catequesis  -->
		<fieldset>
		<legend>Modulo Catequesis</legend>

			<div class="col-lg-6">

				<!-- Crear-->
				<div class="form-group">
					{!! Form::checkbox('catequesis[]', 1, null, ['class' => 'field']) !!}
					{!!	Form::label('crearCatequesis','Crear')	!!}
				</div>

				<!-- Consultar-->
				<div class="form-group">
					{!! Form::checkbox('catequesis[]', 2, null, ['class' => 'field']) !!}
					{!!	Form::label('consultarCatequesis','Consultar')	!!}
				</div>

			</div>

			<div class="col-lg-6">

				<!-- Editar-->
				<div class="form-group">
					{!! Form::checkbox('catequesis[]', 3, null, ['class' => 'field']) !!}
					{!!	Form::label('editarCatequesis','Editar')	!!}
				</div>


				<!-- Eliminar -->
				<div class="form-group">
					{!! Form::checkbox('catequesis[]', 4, null, ['class' => 'field']) !!}
					{!!	Form::label('eliminarCatequesis','Eliminar')	!!}
				</div>

			</div>

		</fieldset>

	</div>

	<!-- Derecha  -->
	<div class="col-lg-6">

		<!-- Agenda  -->
		<fieldset>
		<legend >Modulo Agenda</legend>

			<div class="col-lg-6">

				<!-- Crear-->
				<div class="form-group">
					{!! Form::checkbox('agenda[]', 1, null, ['class' => 'field']) !!}
					{!!	Form::label('crearAgenda','Crear')	!!}
				</div>

				<!-- Consultar-->
				<div class="form-group">
					{!! Form::checkbox('agenda[]', 2, null, ['class' => 'field']) !!}
					{!!	Form::label('consultarAgenda','Consultar')	!!}
				</div>

			</div>


			<div class="col-lg-6">

				<!-- Editar-->
				<div class="form-group">
					{!! Form::checkbox('agenda[]', 3, null, ['class' => 'field']) !!}
					{!!	Form::label('editarAgenda','Editar')	!!}
				</div>


				<!-- Eliminar -->
				<div class="form-group">
					{!! Form::checkbox('agenda[]', 4, null, ['class' => 'field']) !!}
					{!!	Form::label('eliminarAgenda','Eliminar')	!!}
				</div>

			</div>

		</fieldset>

</fieldset>
</div>