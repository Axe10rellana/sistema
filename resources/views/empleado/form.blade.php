<h1>{{ $modo }} empleado</h1>

@if(count($errors)>0)
	<div class="alert alert-danger" role="alert">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<div class="form-group mb-3">
	<input class="form-control" type="text" name="Nombre" id="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : old('Nombre') }}" placeholder="Nombre" />
</div>

<div class="form-group mb-3">
	<input class="form-control" type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : old('ApellidoPaterno') }}" placeholder="Apellido Paterno" />
</div>

<div class="form-group mb-3">
	<input class="form-control" type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : old('ApellidoMaterno') }}" placeholder="Apellido Materno" />
</div>

<div class="form-group mb-3">
	<input class="form-control" type="email" name="Correo" id="Correo" value="{{ isset($empleado->Correo) ? $empleado->Correo : old('Correo') }}" placeholder="Correo" />
</div>

<div class="form-group mb-3">
	<label style="cursor: pointer;" for="Foto">{{ isset($empleado->Foto) ? '' : 'Foto:' }}</label>
	@if(isset($empleado->Foto))
		<img class="img-thumbnail img-fluid" width="100" src="{{ asset('storage').'/'.$empleado->Foto }}" alt="{{ $empleado->Nombre }}" />
	@endif
	<input class="form-control bg-success text-white" type="file" name="Foto" id="Foto" />
</div>

<input class="btn btn-success d-inline" type="submit" value="{{ $modo }} Datos" />
<a class="btn btn-primary" href="{{ url('/empleado') }}">Regresar</a>