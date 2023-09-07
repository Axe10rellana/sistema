@extends('layouts.app')

@section('content')
<div class="container">

	@if(Session::has('mensaje'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			{{ Session::get('mensaje') }}
			
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
			</button>
		</div>
	@endif

	<a class="btn btn-success" href="{{ url('/empleado/create') }}">Registrar un nuevo empleado</a>
	<br /><br />
	<table class="table table-light">
		<thead class="thead-light">
			<tr>
				<th>#</th>
				<th>Foto</th>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Correo</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($empleados as $empleado)
			<tr>
				<td>{{ $empleado->id }}</td>
				<td>
					<img class="img-thumbnail img-fluid" width="100" src="{{ asset('storage').'/'.$empleado->Foto }}" alt="{{ $empleado->Nombre }}" />
				</td>
				<td>{{ $empleado->Nombre }}</td>
				<td>{{ $empleado->ApellidoPaterno }}</td>
				<td>{{ $empleado->ApellidoMaterno }}</td>
				<td>{{ $empleado->Correo }}</td>
				<td>
					<a class="btn btn-warning" href="{{ url('/empleado/'.$empleado->id.'/edit') }}">Editar</a>
					<form class="d-inline" action="{{ url('/empleado/'.$empleado->id) }}" method="post">
						@csrf
						{{ method_field('DELETE') }}
						<input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar" />
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{!! $empleados->links() !!}
</div>
@endsection