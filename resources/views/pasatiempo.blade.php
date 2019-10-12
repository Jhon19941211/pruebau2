@extends('layouts.app')

@section('content')
<div class="container">


<a type="button" href="{{ route('crearpasatiempo')}}" class="btn btn-primary">Crear Pasa tiempo</a>
  <a type="button" href="{{ route('listar')}} " class="btn btn-secondary">Ver pasa tiempos</a>


 
  
</div>
@endsection
