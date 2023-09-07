@extends('layouts.app')

@section('content')
<div class="container">

	<form class="" action="{{ url('/empleado') }}" enctype="multipart/form-data" method="post" autocomplete="off">
		@csrf
		@include('empleado.form', ['modo'=>'Crear'])
	</form>

</div>
@endsection