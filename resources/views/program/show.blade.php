@extends('template.index')

@section('content')

<h1>{{ $program->nama }}</h1>
<div>
	{{ $program->biaya }}
</div>

@stop

